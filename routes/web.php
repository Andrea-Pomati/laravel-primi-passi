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

// route homepage
Route::get('/', function () {

    $data = [
        "nome" => "Pinco",
        "cognome" => "Pallino"

    ];


    return view('home', $data);
});


Route::get('/link-1', function () {
    return view('link-1');
});



Route::get('/link-2', function () {
    return view('link-2');
});