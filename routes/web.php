<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/welcome', function () {
    return "Selamat Datang";
});

Route::get('/about', function () {
    return "NIM: 244107020079 <br> Nama: Amin Aziz sudjud";
});

Route::get('/user/{name}', function ($name) {
    return "Nama Saya: " . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});

Route::get('/articles/{articleID}', function ($articleID) {
    return 'Halaman artikel dengan ID ' . $articleID;
});

Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya ' . $name;
});
