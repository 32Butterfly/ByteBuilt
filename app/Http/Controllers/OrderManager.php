<?php

namespace App\Http\Controllers;
use App\Models\City;
use App\Models\Orders;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Stripe\StripeClient;

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
            'phone' => ['required', 'numeric'],
        ]);

        $cartItems = DB::table('cart')
        ->join('products', 'cart.product_id', '=', 'products.id')
        ->select('cart.product_id', 
        DB::raw('count(*) as quantity'), 'products.price', 'products.name')
        ->where("user_id", Auth::user()->id)
        ->groupBy("cart.product_id", "products.price", "products.name")
        ->get();

        if($cartItems->isEmpty()){
            return redirect()->back()->with('error', 'Your cart is empty.');
        }

        $productsIds = [];
        $quantities = [];
        $totalPrice = 0;
        $lineItems = [];

        foreach($cartItems as $item){
            $productsIds[] = $item->product_id;
            $quantities[] = $item->quantity;
            $totalPrice += $item->price * $item->quantity;
            $lineItems[] = [
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => $item->name,
                    ],
                    'unit_amount' => $item->price * 100,
                ],
                'quantity' => $item->quantity,
            ];
        }

        $order = Orders::create([
            'user_id'     => Auth::user()->id,
            'address'     => $request->address,
            'city'        => $request->city,
            'phone'       => $request->phone,
            'product_id'  => json_encode($productsIds),
            'quantity'    => json_encode($quantities),
            'total_price' => $totalPrice,
        ]);

        if($order->save()){
            DB::table('cart')->where('user_id', Auth::user()->id)->delete();
            $stripe = new StripeClient(config('app.STRIPE_KEY'));

            $checkoutSession = $stripe->checkout->sessions->create([
                'success_url' => route('payment.success', ['order_id' => $order->id]),
                'cancel_url' => route('payment.error'),
                'payment_method_types' => ['card'],
                'line_items' => $lineItems,
                'mode' => 'payment',
                'customer_email' => Auth::user()->email,
                'metadata' => [
                    'order_id' => $order->id,
                ],
              ]);

            return redirect($checkoutSession->url);
        } else {
            return redirect()->back()->with('error', 'Failed to place order.');
        }
    }

    function paymentSuccess($order_id){
        return redirect()->route('orderHistory')->with('success', 'Payment successful for order #' . $order_id);
    }

    function paymentError(){
        return redirect()->route('orderHistory')->with('error', 'Payment was unsuccessfull');;
    }

    function webhookStripe(Request $request){
        $endpoint_secret = config('app.STRIPE_WEBHOOK_SECRET');
        $payload = $request->getContent();
        $sig_header = $request->headers->get('Stripe-Signature');

        try {
            $event = \Stripe\Webhook::constructEvent(
                $payload, $sig_header, $endpoint_secret
            );
        } catch(\UnexpectedValueException $e) {
            return response()->json(['error' => 'Invalid payload'], 400);
        } catch(\Stripe\Exception\SignatureVerificationException $e) {
            return response()->json(['error' => 'Invalid signature'], 400);
        }

        if ($event->type == 'checkout.session.completed') {
            $session = $event->data->object;
            $order_id = $session->metadata->order_id;
            $payment_id = $session->payment_intent;

            $order = Orders::find($order_id);
            if ($order) {
                $order->payment_id = $payment_id;
                $order->status = 'paid';
                $order->save();
            };
        }

        return response()->json(['status' => 'success'], 200);
    }

    function orderHistory(){
        $orders = Orders::where('user_id', Auth::user()->id)->get();
        
        $orders = $orders->map(function($order) {
            $functionIds = json_decode($order->product_id, true);
            $quantities = json_decode($order->quantity, true);

            $products = Product::whereIn('id', $functionIds)->get();
            

            $order->product_details = $products->map(function($product) use ($functionIds, $quantities) {
                $index = array_search($product->id, $functionIds);

                if (isset($quantities[$index])) {
                    $quantity = $quantities[$index];
                } else {
                    $quantity = 0;
                }

                return [
                    'name' => $product->name,
                    'quantity' => $quantity,
                    'image' => $product->image,
                    'currency' => $product->currency,
                ];
            });

            return $order;
        });

        return view('history', compact('orders'));
    }
}