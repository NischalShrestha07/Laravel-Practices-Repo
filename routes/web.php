<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/post', function () {
    return view('post');
});
// Route::view('post', '/post');//the code above and this are same as they do the same work
Route::get('/post/firstpost', function () {
    return view('firstpost  ');
});
