<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/products', function () {
    $products = Product::all();
    return view('products', compact('products'));
})->name('products');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');