<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ForgetPasswordManager;
use App\Http\Controllers\OrderManager;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/products', [ProductController::class, 'index'])->name('products');

Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');

Route::get('/register', [AuthManager::class, 'register'])->name('register');
Route::post('/register', [AuthManager::class, 'registerPost'])->name('register.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');

Route::middleware([\App\Http\Middleware\CheckSuperuser::class])       // only logged‑in superusers
     ->get('/admin',[\App\Http\Controllers\AdminDashboardController::class, 'index'])
     ->name('adminDashboard');

Route::get('/forget-password', [ForgetPasswordManager::class, 'forgetPassword'])->name('forgetPassword');
Route::post('/forget-password', [ForgetPasswordManager::class, 'forgetPasswordPost'])->name('forgetPassword.post');

Route::get('/reset-password/{token}', [ForgetPasswordManager::class, 'resetPassword'])->name('resetPassword');
Route::post('/reset-password', [ForgetPasswordManager::class, 'resetPasswordPost'])->name('resetPassword.post');

Route::middleware("auth")->group(function(){
    Route::get('/cart/{id}', [ProductController::class, 'addToCart'])->name('cartAdd');

    Route::get('/cart', [ProductController::class, 'showCart'])->name('showCart');

    Route::get('/checkout', [OrderManager::class, 'showCheckout'])->name('showCheckout');

    Route::post('/checkout', [OrderManager::class, 'checkoutPost'])->name('checkoutPost');
});