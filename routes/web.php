<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Home / Dashboard
Route::get('/', [AuthController::class, 'dashboard'])->middleware('auth')->name('dashboard');

// Signup Routes
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

// Login Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');