<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cart;
use App\Models\City;
use App\Models\Product;
use App\Models\Orders;
use Illuminate\Support\Facades\Hash;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $users = User::paginate(8);
        
        return view('adminDashboard', compact('users'));
    }

    public function orders()
    {
        $orders = Orders::with(['user'])->paginate(3);
        $cities = City::all();

        return view('adminManageOrders', compact('orders', 'cities'));
    }

    public function products()
    {
        $products = Product::Paginate(5);
        
        return view('adminManageProducts', compact('products'));
    }
 
    public function cart()
    {

        $users = User::whereHas('cart')
            ->with(['cart.product']) 
            ->paginate(10);
            
        return view('adminManageCarts', compact('users'));
    }

    public function addCart(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
        ]);

        Cart::create([
            'user_id' => $request->user_id,
            'product_id' => $request->product_id,
        ]);

        return redirect()->back()->with('success', 'Cart entry added successfully.');
    }

    public function adminManageUsers(Request $request)
    {
        $ids = $request->input('user_ids', []);
        $action = $request->input('action');
    
        if (empty($ids)) {
            return back()->with('error', 'No users selected.');
        }
    
        if ($action === 'delete') {
            User::whereIn('id', $ids)->where('id', '!=', 1)->delete();
            return back()->with('success', 'Users deleted successfully.');
        }
    
        if ($action === 'toggleRole') {
            foreach ($ids as $id) {
                if ($id == 1) continue;
    
                $user = User::find($id);
                if ($user) {
                    $user->role = $user->role === 'user' ? 'superuser' : 'user';
                    $user->save();
                }
            }
            return back()->with('success', 'User roles updated.');
        }
    
        return back()->with('error', 'Invalid action.');
    }

    public function adminManageProducts(Request $request)
    {
        $ids = $request->input('product_ids', []);
        $action = $request->input('action');
    
        if (empty($ids)) {
            return back()->with('error', 'No products selected.');
        }
    
        if ($action === 'delete') {
            Product::whereIn('id', $ids)->delete();
            return back()->with('success', 'Products deleted successfully.');
        }
    
        return back()->with('error', 'Invalid action.');
    }

    public function addProduct(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'specs' => 'required|json',
            'price' => 'required|numeric',
            'currency' => 'required|string|in:$,€,£',
            'image' => 'nullable|image|max:2048',
        ]);

        $product = new Product();
        $product->name = $request->input('name');
        $product->specs = json_decode($request->input('specs'), true);
        $product->price = $request->input('price');
        $product->currency = $request->input('currency');

        if ($image = $request->file('image')) {
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $product->image = "images/{$imageName}";
        }

        $product->save();

        return redirect()->route('adminManageProducts')->with('success', 'Product added successfully!');
    }

    public function adminManageOrders(Request $request)
    {
        $ids = $request->input('order_ids', []);
        $action = $request->input('action');
    
        if (empty($ids)) {
            return back()->with('error', 'No orders selected.');
        }
    
        if ($action === 'delete') {
            Orders::whereIn('id', $ids)->delete();
            return back()->with('success', 'Orders deleted successfully.');
        }
    
        return back()->with('error', 'Invalid action.');
    }

    public function addOrder(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|json',
            'quantity' => 'required|json',
            'total_price' => 'required|numeric',
            'city' => 'required|exists:cities,id',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
        ]);

        $productIds = json_decode($request->input('product_id'), true);
        $quantities = json_decode($request->input('quantity'), true);

        $order = new Orders();
        $order->user_id = $request->input('user_id');
        $order->product_id = json_encode($productIds);
        $order->quantity = json_encode($quantities);
        $order->total_price = $request->input('total_price');
        $order->city = $request->input('city');
        $order->address = $request->input('address');
        $order->phone = $request->input('phone');
        $order->payment_id = $request->input('payment_id');
        $order->status = $request->input('status');
        $order->save();

        return redirect()->route('adminManageOrders')->with('success', 'Order added successfully!');
    }

    public function adminManageCarts(Request $request)
    {
        $ids = $request->input('cart_ids', []);
        $action = $request->input('action');
    
        if (empty($ids)) {
            return back()->with('error', 'No cart selected.');
        }
    
        if ($action === 'delete') {
            Cart::whereIn('user_id', $ids)->delete();
            return back()->with('success', 'Carts deleted successfully.');
        }
    
        return back()->with('error', 'Invalid action.');
    }

    public function addUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email|unique:users,email|max:100',
            'password' => 'required|string|min:6|max:30',
            'role' => 'required|in:superuser,user',
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->role = $request->input('role');
        $user->save();

        return redirect()->route('adminDashboard')->with('success', 'User created successfully!');
    }
}