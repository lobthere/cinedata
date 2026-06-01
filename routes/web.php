<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/movies', [MovieController::class, 'index']);
Route::get('/movies/add', [MovieController::class, 'create']);
Route::post('/store', [MovieController::class, 'store']);
Route::get('/movies/{id}', [MovieController::class, 'show']);