<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\CommentsContr;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/movies', [MovieController::class, 'index']);
Route::get('/movies/add', [MovieController::class, 'create']);
Route::post('/store', [MovieController::class, 'store']);
Route::get('/movies/{id}', [MovieController::class, 'show']);
Route::delete('/movies/{id}', [MovieController::class, 'destroy']);
Route::get('/movies/{id}/edit', [MovieController::class, 'edit']);
Route::put('/movies/{id}', [MovieController::class, 'update']);
Route::post('/movies/{id}/comment', [CommentsContr::class,'addComments']);