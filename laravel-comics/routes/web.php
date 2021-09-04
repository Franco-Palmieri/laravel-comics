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
    $details = config('details'); //associo ad una variabile l'array che si trova nel file details nella cartella config
    return view('home', ['details' => $details]);

})->name('homepage');

Route::get('/product', function () {
    return view('product');
})->name('productpage');