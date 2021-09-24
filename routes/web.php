<?php

use App\Http\Controllers\BookApiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\RegisterController;




Route::get('/', [HomePageController::class, 'index'])->name('/');

Route::get('auth.login', [LoginController::class, 'index'])->name('login');
Route::post('auth.login', [LoginController::class, 'store']);


Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('auth.register', [RegisterController::class, 'index'])->name('register');
Route::post('auth.register', [RegisterController::class, 'store']);

Route::get('layouts.books', [BookApiController::class, 'log'])->name('books');
