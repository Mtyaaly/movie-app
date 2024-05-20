<?php

use App\Http\controllers\ReviewController;
use App\Http\controllers\GenreController;
use App\Http\controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/movies', [MovieController::class, 'index']);

Route::get('/products', function () {
    return view('product');
});

Route::get('/genres', [GenreController::class, 'index']);

Route::get('/reviews', [ReviewController::class, 'index']);


