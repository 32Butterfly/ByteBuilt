<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = request('search');

        $products = Product::when($query, function ($q) use ($query) {
            $q->where('name', 'like', '%' . $query . '%');
        })->paginate(8);

        return view('products', compact('products'));
    }

    function addToCart($id){
        $cart = new Cart;
        $cart->user_id = Auth::user()->id;
        $cart->product_id = $id;
        if($cart->save()){
            return redirect(route('products'))->with('success', 'Product added to cart successfully!');
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
        ->paginate(3);

        return view('cart', compact('cartItems'));
    }

    public function removeOne(Request $request)
    {
        Cart::where('user_id', Auth::id())
            ->where('product_id', $request->product_id)
            ->limit(1)
            ->delete();

        return redirect()->back()->with('success', 'Removed one quantity.');
    }

    public function addOne(Request $request)
    {
        Cart::create([
            'user_id' => Auth::id(),
            'product_id' => $request->product_id,
        ]);

        return redirect()->back()->with('success', 'Added one more to cart.');
    }
}