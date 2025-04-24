<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/products', [ProductController::class, 'index'])->name('products');

Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');

Route::get('/register', [AuthManager::class, 'register'])->name('register');
Route::post('/register', [AuthManager::class, 'registerPost'])->name('register.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');

Route::middleware([\App\Http\Middleware\CheckSuperuser::class])
     ->get('/admin',[\App\Http\Controllers\AdminDashboardController::class, 'index'])
     ->name('adminDashboard');