<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return inertia('Home');
});

Route::get('/login', [App\Http\Controllers\Web\AuthController::class, 'index'])->name('login');
