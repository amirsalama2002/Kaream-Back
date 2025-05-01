<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\DateNameController;
use App\Http\Controllers\Api\NovelsController;
use App\Http\Controllers\Api\FalconController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);


Route::get('books', [BookController::class, 'index']);
Route::get('books/{id}', [BookController::class, 'show']);

Route::get('date', [DateNameController::class, 'index']);
Route::get('date/{id}', [DateNameController::class, 'show']);


Route::get('novels', [NovelsController::class, 'index']);
Route::get('novels/{id}', [NovelsController::class, 'show']);

Route::get('falcon', [FalconController::class, 'index']);
Route::get('falcon/{id}', [FalconController::class, 'show']);