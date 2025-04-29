<?php

namespace App\Http\Controllers;
use App\Models\City;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderManager extends Controller
{
    function showCheckout(){

        $cities = City::all();

        return view('checkout', compact('cities'));
    }

    function checkoutPost(Request $request){
        $request->validate([
            'address' => 'required',
            'city' => 'required',
            'phone' => 'required',
        ]);

        $cartItems = DB::table('cart')
        ->join('products', 'cart.product_id', '=', 'products.id')
        ->select('cart.product_id', 
        DB::raw('count(*) as quantity'), 'products.price')
        ->where("user_id", Auth::user()->id)
        ->groupBy("cart.product_id", "products.price")
        ->get();

        if($cartItems->isEmpty()){
            return redirect()->back()->with('error', 'Your cart is empty.');
        }

        $productsIds = [];
        $quantities = [];
        $totalPrice = 0;

        foreach($cartItems as $item){
            $productsIds[] = $item->product_id;
            $quantities[] = $item->quantity;
            $totalPrice += $item->price * $item->quantity;
        }

        $order = new Orders();
        $order->user_id = Auth::user()->id;
        $order->address = $request->address;
        $order->city = $request->city;
        $order->phone = $request->phone;
        $order->product_id = json_encode($productsIds);
        $order->total_price = $totalPrice;
        $order->quantity = json_encode($quantities);

        if($order->save()){
            DB::table('cart')->where('user_id', Auth::user()->id)->delete();
            return redirect(route('home'))->with('success', 'Order placed successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to place order.');
        }
    }
}
