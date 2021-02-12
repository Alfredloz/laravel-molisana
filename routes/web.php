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
    return view('homepage.homepage');
})->name('home');

Route::get('products', function () {
    $data = json_decode( config('dati.pasta'), true );
    return view('products.products', compact('data'));
})->name('product');
Route::get('info', function () {
    return view('info.info');
})->name('info');

// prova degli item con foreach


// Route::get('products/{id}', function ($id) {
//     $data = json_decode(config('dati.pasta'), true);
//     $prodotto= $data[$id];    

//     return view('products.products', compact('prodotto'));
// });



