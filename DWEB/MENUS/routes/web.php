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


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return redirect('/inicio');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/fotos', function () {
    return view('fotos');
});

Route::get('/contacto', function () {
    return view('contacto');
});
