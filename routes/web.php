<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ForgetPasswordManager;
use App\Http\Controllers\OrderManager;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\UploadManager;

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
     ->get('/admin',[AdminDashboardController::class, 'index'])
     ->name('adminDashboard');
     
Route::middleware([\App\Http\Middleware\CheckSuperuser::class])       // only logged‑in superusers
     ->get('/admin/products',[AdminDashboardController::class, 'products'])
     ->name('adminManageProducts');

Route::middleware([\App\Http\Middleware\CheckSuperuser::class])       // only logged‑in superusers
     ->get('/admin/orders',[AdminDashboardController::class, 'orders'])
     ->name('adminManageOrders');

Route::middleware([\App\Http\Middleware\CheckSuperuser::class])       // only logged‑in superusers
     ->get('/admin/carts',[AdminDashboardController::class, 'cart'])
     ->name('adminManageCarts');       

Route::get('/forget-password', [ForgetPasswordManager::class, 'forgetPassword'])
    ->name('forgetPassword');
Route::post('/forget-password', [ForgetPasswordManager::class, 'forgetPasswordPost'])
    ->name('forgetPassword.post');

Route::get('/reset-password/{token}', [ForgetPasswordManager::class, 'resetPassword'])
    ->name('resetPassword');
Route::post('/reset-password', [ForgetPasswordManager::class, 'resetPasswordPost'])
    ->name('resetPassword.post');

Route::middleware("auth")->group(function(){
    Route::get('/cart/{id}', [ProductController::class, 'addToCart'])->name('cartAdd');

    Route::get('/cart', [ProductController::class, 'showCart'])->name('showCart');

    Route::get('/checkout', [OrderManager::class, 'showCheckout'])->name('showCheckout');

    Route::post('/checkout', [OrderManager::class, 'checkoutPost'])->name('checkoutPost');

    Route::get('/payment/success/{order_id}', [OrderManager::class, 'paymentSuccess'])
        ->name('payment.success');

    Route::get('/payment/error', [OrderManager::class, 'paymentError'])->name('payment.error');

    Route::get('/orderHistory', [OrderManager::class, 'orderHistory'])->name('orderHistory');

    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    Route::post('/profile', [UploadManager::class, 'uploadPost'])->name('profile.post');

    Route::post('/cart/remove-one', [ProductController::class, 'removeOne'])
        ->name('cart.removeOne');

        Route::post('/cart/add-one', [ProductController::class, 'addOne'])
        ->name('cart.addOne');
});

Route::post('/admin/adminManageUsers', [AdminDashboardController::class, 'adminManageUsers'])
    ->name('adminManageUsers');

Route::post('/admin/adminProducts', [AdminDashboardController::class, 'adminManageProducts'])
    ->name('adminProducts');

Route::post('/admin/adminOrders', [AdminDashboardController::class, 'adminManageOrders'])
    ->name('adminOrders');    

Route::post('/admin/add-user', [AdminDashboardController::class, 'addUser'])
    ->name('adminAddUser');
