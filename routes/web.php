<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;

// Welcome page
Route::get('/', function () {
    return view('welcome');
});

// Auth routes (login, register, etc.)
Auth::routes();

// After login, go to /home
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Routes that need authentication
Route::middleware('auth')->group(function () {
    // Employee CRUD
    Route::resource('employees', EmployeeController::class);

    // Summary page
    Route::get('/summary', [EmployeeController::class, 'summary'])->name('employees.summary');
});
