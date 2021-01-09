<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home')->template(\App\Nova\Templates\Home::class);

Route::get('/exposants', function () {
    return view('exhibitors');
})->name('exhibitors');

Route::get('/devenir-exposant', function () {
    return view('become-exhibitor');
})->name('become-exhibitor');

Route::get('/informations-pratiques', function () {
    return view('practical-information');
})->name('practical-information');

Route::get('/galerie', function () {
    return view('gallery');
})->name('gallery');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
