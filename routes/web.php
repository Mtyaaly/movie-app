<?php

use App\Http\controllers\ReviewController;
use App\Http\controllers\GenreController;
use App\Http\controllers\MovieController;
use App\Http\controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});




Route::resource('/movies', MovieController::class);

Route::resource('/products', ProductController::class);


Route::resource('/genres', GenreController::class);

Route::resource('/reviews', ReviewController::class);

