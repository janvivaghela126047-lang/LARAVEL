
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::prefix('page')->group(function(){

    Route::get('page/about', function () {
        return "<h1> about page</h1>";
    });
    
    Route::get('page/gallery', function () {
        return "<h1> gallery page</h1>";
    });
    
    Route::get('page/post/firstpost', function () {
        return "<h1> first post page</h1>";
    });
});

Route::fallback(function(){
   return "<h1>page note found.</h1>";
});