<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Web\AuthController::class, 'index'])->name('login');
Route::get('/dashboard', [App\Http\Controllers\Web\DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/regisration/index', [App\Http\Controllers\Web\RegisrationController::class, 'index'])->name('registration.index');
Route::get('/regisration/create', [App\Http\Controllers\Web\RegisrationController::class, 'create'])->name('registration.create');

Route::get('/record/index', [App\Http\Controllers\Web\RecordController::class, 'index'])->name('record.index');
Route::get('/scheduling/index', [App\Http\Controllers\Web\SchedulingController::class, 'index'])->name('scheduling.index');