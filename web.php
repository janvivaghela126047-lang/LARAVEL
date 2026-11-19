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
    return view('welcome');
});


Route::get('/File1', function () {
    return view('File1');
});

Route::get('/File2', function () {
    return view('File2');
});

Route::get('/File3', function () {
    return view('File3');
});

Route::get('/File4', function () {
    return view('File4');
});

Route::get('/File5', function () {
    return view('File5');
});
