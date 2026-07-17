<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductWebController;
use Illuminate\Support\Facades\Route;

// Login routes — anyone can see these
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Home redirects to products
Route::get('/', function () {
    return redirect()->route('products.index');
});

// Product routes — only logged-in users can access these
Route::middleware('auth')->group(function () {
    Route::resource('products', ProductWebController::class);
});
