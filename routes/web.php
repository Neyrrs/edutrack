<?php

use App\Http\Controllers\activities;
use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');