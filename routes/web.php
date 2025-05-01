<?php


// use App\Http\Controllers\DateController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DateControllerController;
use App\Http\Controllers\FalconController;
use App\Http\Controllers\NovelsController;

Route::resource('date', DateControllerController::class);
Route::resource('falcon', FalconController::class);
Route::resource('novels', NovelsController::class);
Route::resource('books', BookController::class);

Route::get('/',function(){
      return view('welcome');
});

