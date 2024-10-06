<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return inertia('Dashboard/Index');
})->name('dashboard');

// Auth/Login
Route::get('/login', [App\Http\Controllers\Web\AuthController::class, 'login'])->name('auth.page');
Route::post('/login', [App\Http\Controllers\Web\AuthController::class, 'authenticateLogin'])->name('auth.login');
Route::get('/register', [App\Http\Controllers\Web\AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [App\Http\Controllers\Web\AuthController::class, 'authenticateRegister'])->name('auth.register');
