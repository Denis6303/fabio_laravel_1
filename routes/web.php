<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SomeController;

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
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/matchs', function () {
    return view('matchs');
})->name('matchs');

Route::get('/about', function () {
    return view('about');
})->name('about');



// Route::get('dataforselect2', [SomeController::class, 'getdataforselect2'])->name('dataforselect2');
