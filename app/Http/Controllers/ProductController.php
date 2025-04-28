<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(8);
        return view('products', compact('products')); // Pass products to the view
    }
}
