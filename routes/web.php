<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;



Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/articles/{articleID}', [ArticleController::class, 'article']);

Route::get('/world', function () {
    return 'World';
});

Route::get('/welcome', function () {
    return "Selamat Datang";
});

Route::resource('photos', PhotoController::class)->only([ 
'index', 'show' 
]); 
Route::resource('photos', PhotoController::class)->except([ 
'create', 'store', 'update', 'destroy' 
]); 

Route::get('/user/{name}', function ($name) {
    return "Nama Saya: " . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});


Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya ' . $name;
});
