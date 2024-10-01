<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Web\AuthController::class, 'index'])->name('login');
Route::get('/dashboard', [App\Http\Controllers\Web\DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/regisration/index', [App\Http\Controllers\Web\RegisrationController::class, 'index'])->name('registration.index');
Route::get('/regisration/create', [App\Http\Controllers\Web\RegisrationController::class, 'create'])->name('registration.createe');

// Admin
Route::get('/admin/index', [App\Http\Controllers\Web\AdminController::class, 'index'])->name('admin.index');

// Dentist
Route::get('/dentist/index', [App\Http\Controllers\Web\DentistController::class, 'index'])->name('dentist.index');
