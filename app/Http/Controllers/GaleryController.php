<?php

namespace App\Http\Controllers;

use EricLagarda\NovaGallery\Models\Album;
use Illuminate\Http\Request;

class GaleryController extends Controller
{

    public function index()
    {
        $albums = Album::with('photos')->get();

        return view('gallery', ['albums' => $albums]);
    }
}
