<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(8);
        return view('products', compact('products')); // Pass products to the view
    }

    function addToCart($id){
        $cart = new Cart;
        $cart->user_id = Auth::user()->id;
        $cart->product_id = $id;
        if($cart->save()){
            return redirect(route('home'))->with('success', 'Product added to cart successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to add product to cart.');
        }
    }

    function showCart(){
        $cartItems = DB::table('cart')
        ->join('products', 'cart.product_id', '=', 'products.id')
        ->select('cart.product_id', 
        DB::raw('count(*) as quantity'), 'products.name', 'products.price', 'products.image'  ,'products.currency')
        ->where("user_id", Auth::user()->id)
        ->groupBy("cart.product_id", "products.name", "products.price", "products.image", "products.currency")
        ->paginate(1);

        return view('cart', compact('cartItems'));
    }
}