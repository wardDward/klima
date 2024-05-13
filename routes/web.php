<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\WeatherController;
use Illuminate\Support\Facades\Route;



Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'loginView'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate']);
    Route::get('/register', [AuthController::class, 'registerView'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/auth/google/redirect', [AuthController::class, 'redirectToGoogle'])->name('redirectGoogle');
    Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/', [WeatherController::class, 'index'])->name('dashboard');
    Route::get('/summary', [WeatherController::class, 'summary'])->name('summary');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
