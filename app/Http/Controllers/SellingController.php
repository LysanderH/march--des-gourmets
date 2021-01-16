<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use App\Models\Selling;
use Illuminate\Http\Request;
use Laravel\Nova\Testing\Browser\Pages\Page;
use Whitecube\NovaPage\Pages\Manager;

class SellingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tickets.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Manager $page)
    {
        $validated = $request->validate([
            'tickets_children' => 'required|max:20|numeric',
            'tickets_adults' => 'required|numeric',
        ]);

        $children = $validated['tickets_children'];

        $totalChildren = $children * $page->option('Prix')->price_children;

        $adults = $validated['tickets_adults'];

        $totalAdults = $adults * $page->option('Prix')->price_adults;

        $total = ($validated['tickets_children'] * $page->option('Prix')->price_children) + ($validated['tickets_adults'] * $page->option('Prix')->price_adults);

        session([
            'children' => $children,
            'totalChildren' => $totalChildren,
            'adults' => $adults,
            'totalAdults' => $totalAdults,
            'total' => $total
        ]);

        return view('tickets.confirm', [
            'children' => $children,
            'totalChildren' => $totalChildren,
            'adults' => $adults,
            'totalAdults' => $totalAdults,
            'total' => $total
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $selling = Selling::create([
            'name' => session('name'),
            'first-name' => session('first_name'),
            'email' => session('email'),
            'tel' => session('tel'),
            'street' => session('street'),
            'number' => session('number'),
            'postal' => session('postal'),
            'town' => session('town'),
            'country' => session('country'),
            'children' => session('children'),
            'adults' => session('adults'),
            'total_children' => session('totalChildren'),
            'total_adults' => session('totalAdults'),
            'total' => session('total'),
            'checktoken' => md5(rand(1, 10) . microtime()),
        ]);


        $details['email'] = $selling->email;

        $details['selling'] = $selling;



        dispatch(new SendEmailJob($details));

        return view('tickets.success', ['selling' => $selling]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Selling  $selling
     * @return \Illuminate\Http\Response
     */
    public function show(Selling $selling)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Selling  $selling
     * @return \Illuminate\Http\Response
     */
    public function edit(Selling $selling)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Selling  $selling
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Selling $selling)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Selling  $selling
     * @return \Illuminate\Http\Response
     */
    public function destroy(Selling $selling)
    {
        //
    }

    public function checkAddress(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'first_name' => 'required',
            'email' => 'required|email',
            'tel' => 'required',
            'street' => 'required',
            'number' => 'required|numeric',
            'postal' => 'required',
            'town' => 'required',
            'country' => 'required',
        ]);

        session([
            'name' => $validated['name'],
            'first_name' => $validated['first_name'],
            'email' => $validated['email'],
            'tel' => $validated['tel'],
            'street' => $validated['street'],
            'number' => $validated['number'],
            'postal' => $validated['postal'],
            'town' => $validated['town'],
            'country' => $validated['country'],
        ]);

        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $intent = \Stripe\PaymentIntent::create([
            'amount' => session('total') * 100,
            'currency' => 'eur',
            // Verify your integration in this guide by including this parameter
            'metadata' => ['integration_check' => 'accept_a_payment'],
        ]);

        return view('tickets.checkout', ['intent' => $intent]);
    }
}
