<?php

namespace App\Http\Controllers;

use App\Jobs\SendContactMailJob;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|regex:/^((?!http).)*$/',
            'email' => 'required|email',
            'subject' => 'required|max:78',
            'message' => 'required',
        ]);

        dispatch(new SendContactMailJob($validated));

        return redirect()->back()->with('success', 'Le mail a bien été envoyé');
    }
}
