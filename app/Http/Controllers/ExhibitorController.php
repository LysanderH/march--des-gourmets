<?php

namespace App\Http\Controllers;

use App\Jobs\SendRequestConfirmationEmail;
use App\Models\Category;
use App\Models\Exhibitor;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ExhibitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exhibitors = Exhibitor::with('categories')->where('accepted', true)->paginate(10);

        return view('exhibitors', ['exhibitors' => $exhibitors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('become-exhibitor', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'enterprise' => 'required',
            'name' => 'required',
            'first_name' => 'required',
            'mail' => 'required|email',
            'phone' => 'required',
            'logo' => 'mimes:png,jpg,JPG',
            'street' => 'required',
            'street_number' => 'required|numeric',
            'postal' => 'required',
            'ville' => 'required',
            'country' => 'required',
            'message' => 'required|max:10000',
        ]);


        $originalImage = $request->file('logo');

        $img = Image::make($originalImage);

        $img->resize(66, 66, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });

        $fileName = preg_replace("/[^a-zA-Z]+/", "", $validated['enterprise']) . md5(rand(1, 10) . microtime()) . '.jpg';

        $img->save(public_path('/storage/') . $fileName, 80, 'jpg');

        $exhibitor = Exhibitor::create([
            'company' => $validated['enterprise'],
            'name' => $validated['name'],
            'firstname' => $validated['first_name'],
            'email' => $validated['mail'],
            'phone' => $validated['phone'],
            'street' => $validated['street'],
            'house_number' => $validated['street_number'],
            'postal' => $validated['postal'],
            'village' => $validated['ville'],
            'country' => $validated['country'],
            'accepted' => false,
            'logo' => $fileName,
            'description' => $validated['message'],
        ]);

        foreach ($request->art_type as $category) {
            $exhibitor->categories()->attach(Category::where('name', $category)->first()->id);
        }


        $details['exhibitor'] = $exhibitor;
        $details['email'] = $validated['mail'];

        dispatch(new SendRequestConfirmationEmail($details));

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exhibitor  $exhibitor
     * @return \Illuminate\Http\Response
     */
    public function show(Exhibitor $exhibitor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exhibitor  $exhibitor
     * @return \Illuminate\Http\Response
     */
    public function edit(Exhibitor $exhibitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Exhibitor  $exhibitor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exhibitor $exhibitor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exhibitor  $exhibitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exhibitor $exhibitor)
    {
        //
    }
}
