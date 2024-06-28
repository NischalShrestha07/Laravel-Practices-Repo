<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/post/{id?}/comment/{commentid?}', function (string $id = null, string $comment = null) {
    // Route::get('/post/{id}', function (string $id = null, string $comment = null) {
    // return view('post');
    if ($id) {
        return "<h1>Post ID:" . $id . " </h1><h2>" . $comment . "</h2>";
    } else {
        return "<h1>No ID Found.</h1>";
    }
})->where("id", '[0-9]+')->whereAlpha('commentid');


Route::get('/about', function () {
    return view('about');
});
Route::get('/post', function () {
    return view('post');
})->name('mypost');  //this will help to search even the path is changed above even /posttss




// Route::view('/post', 'post');//the code above and this are same as they do the same work
// Route::get('/post/firstpost', function () {
//     return view('firstpost  ');
// });
