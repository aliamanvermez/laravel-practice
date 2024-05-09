<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
