<?php

use App\Providers\AppServiceProvider;
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


Route::get('/firstpost', function () {
    return view('firstpost');
});

// Route::view('/post', 'post');//the code above and this are same as they do the same work
// Route::get('/post/firstpost', function () {
//     return view('firstpost  ');
// });
Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('/user/{id}', function (string $id) {
    return 'User' . $id;
});



Route::prefix('page')->group(function () {
    Route::get('/post', function () {
        return view('post');
    })->name('mypost');
    Route::get('/name/1', function () {
        return "<h1>Namastey</h1>s";
    });
    Route::get('/menu', function () {
        return "Hello everyone";
    });
    Route::get('/nab', function () {
        $data['name'] = "Ram";
        $data['address'] = "BRT";
        return view('nab', $data);
    });
});
Route::get('/fruits', function () {
    $fruit['name'] = "Apple";
    $fruit['color'] = "Red";
    $fruit['shape'] = "Round";
    $fruit['seeds'] = "One";
    return view('fruits', $fruit);
});


Route::prefix('details')->group(function () {
    Route::get('/name', function () {
        return "<h1>Nischal</h1>";
    });
    Route::get('/age', function () {
        return "<h1>21</h1>";
    });
    Route::get('/address/home', function () {
        return "<h1>Biratnagar-06</h1>";
    });
    Route::get('/caste', function () {
        return "<h1>Shrestha</h1>";
    });
});

// fallback helps to run the default page when the unavailable route is placed by the user.
Route::fallback(function () {
    return "<h1>PAGE NOT FOUND</h1>";
});
// returns given path like /user/nischal but in another one
Route::get('/user/{name?}', function (?string $name = null) {
    return $name;
});
Route::get('/user/{name?}', function (?string $name = 'John') {
    return $name;
});
Route::get('/data/{name}', function (string $name) {
    return $name;
})->where('name', '[A-Za-z]+');

Route::get('/user/{id}/{name}', function (string $id, string $name) {
    return $name;
})->whereNumber('id')->whereAlpha('name');


Route::get('/category/{category}', function (string $category) {
    return $category;
})->whereIn('category', ['movie', 'song', 'singing', 'painting']);


// declare globally in the AppServiceProvider.php  file.
Route::get('/human/{id}', function (string $id) {
    return $id;
});
