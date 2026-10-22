
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post/{id}/comment/{commentid?}', function ($id, $commentid = null) {

    if ($id) {
        return "<h1>POST ID: " . $id . " & Comment: " . ($commentid ?? 'No comment ID') . "</h1>";
    } else {
        return "<h1>NO ID FOUND</h1>";
    }

})->where('id', '[0-9]+')->whereAlpha('commentid');
