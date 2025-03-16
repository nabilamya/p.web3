<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ListItemController;

// Routes untuk Login (Orang ke-1)
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');

// Routes untuk Dashboard (Orang ke-2)
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Routes untuk List Item (Orang ke-3)
Route::get('/list-item', [ListItemController::class, 'index'])->name('list.item');



