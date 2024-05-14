<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/movies', function () {
    return view('movies.index');
});

Route::get('/products', function () {
    return view('product');
});

Route::get('/genres', function () {
    return view('Genres.index');
});

Route::get('/reviews', function () {
    return view('Reviews.index');
});


