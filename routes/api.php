<?php

use Illuminate\Support\Facades\Route;

Route::apiResource('post', App\Http\Controllers\PostController::class);
Route::post('/register', [App\Http\Controllers\AuthController::class, 'register']);
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->middleware('auth:sanctum');