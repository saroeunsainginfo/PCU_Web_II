<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return inertia('Dashboard/Index');
})->name('dashboard');

// Todo: Auth
Route::get('/', [App\Http\Controllers\Web\AuthController::class, 'login'])->name('auth.login.page');
Route::post('/login', [App\Http\Controllers\Web\AuthController::class, 'authenticateLogin'])->name('auth.login');
Route::get('/register', [App\Http\Controllers\Web\AuthController::class, 'register'])->name('auth.register.page.');
Route::post('/register', [App\Http\Controllers\Web\AuthController::class, 'authenticateRegister'])->name('auth.register');
