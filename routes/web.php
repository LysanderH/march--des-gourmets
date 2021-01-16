<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\ExhibitorController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\SellingController;
use App\Nova\Templates\Contact;
use App\Nova\Templates\PlanDesLieux;
use App\Nova\Templates\PracticalInformation;
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

Route::get('/exposants', [ExhibitorController::class, 'index'])->name('exhibitors');

Route::post('/exhibitor', [ExhibitorController::class, 'store']);

Route::get('/devenir-exposant', [ExhibitorController::class, 'create'])->name('become-exhibitor');

Route::get('/informations-pratiques', function () {
    return view('practical-information');
})->name('practical-information')->template(PracticalInformation::class);

Route::post('/devenir-exposant', [ExhibitorController::class, 'store'])->name('become-exhibitor.store');

Route::get('/galerie', [GaleryController::class, 'index'])->name('gallery');

Route::get('/contact', function () {
    return view('contact');
})->name('contact')->template(Contact::class);

Route::post('/contact', [EmailController::class, 'send']);

Route::get('/plan-d-espace', function () {
    return view('plan-espace');
})->name('plan')->template(PlanDesLieux::class);

Route::get('/tickets', [SellingController::class, 'index']);

Route::post('/tickets', [SellingController::class, 'create']);

Route::post('/tickets/address', [SellingController::class, 'checkAddress']);

Route::post('/success', [SellingController::class, 'store']);
