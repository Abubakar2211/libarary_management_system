<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('users',UserController::class);
Route::apiResource('profiles',UserProfileController::class);
Route::apiResource('authors',AuthorController::class);
Route::apiResource('books',BookController::class);
Route::apiResource('genres',GenreController::class);
Route::apiResource('publishers',PublisherController::class);