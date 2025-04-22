<?php

use Illuminate\Support\Facades\Route;

// /
Route::get('/', [\App\Http\Controllers\HomeController::class, 'show'])->name('Controllers.HomeController.show');
Route::get('/home/redirect', [\App\Http\Controllers\HomeController::class, 'redirect'])->name('Controllers.HomeController.redirect');
Route::get('/about', [\App\Http\Controllers\AboutController::class, 'show'])->name('Controllers.AboutController.show');
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'show'])->name('Controllers.ContactController.show');

