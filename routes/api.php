<?php

use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\DateNameController;
use App\Http\Controllers\Api\NovelsController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// use App\Http\Controllers\Api\BookController;

Route::get('books', [BookController::class, 'index']);
Route::get('books/{id}', [BookController::class, 'show']);

Route::get('date', [DateNameController::class, 'index']);
Route::get('date/{id}', [DateNameController::class, 'show']);


Route::get('novels', [NovelsController::class, 'index']);
Route::get('novels/{id}', [NovelsController::class, 'show']);

