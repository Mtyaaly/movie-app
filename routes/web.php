<?php

use App\Http\controllers\ReviewController;
use App\Http\controllers\GenreController;
use App\Http\controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    return view('product');
});

Route::get('/movies', [MovieController::class, 'index']);
Route::get('/movies/create', [MovieController::class, 'create']);
Route::post('/movies', [MovieController::class, 'store']);
Route::delete('/movies/{movie}', [MovieController::class, 'destroy']);

Route::get('/genres', [GenreController::class, 'index']);
Route::get('/genres/create', [GenreController::class, 'create']);
Route::post('/genres', [GenreController::class, 'store']);
Route::delete('/genres/{genre}', [GenreController::class, 'destroy']);

Route::get('/review', [ReviewController::class, 'index']);
Route::get('/reviews/create', [ReviewController::class, 'create']);
Route::post('/review', [ReviewController::class, 'store']);
Route::delete('/reviews/{review}', [ReviewController::class, 'destroy']);


