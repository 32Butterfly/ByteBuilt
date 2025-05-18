<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cart;
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
        $orders =  Orders::with(['user', 'city'])->paginate(10);
    
        return view('adminManageOrders', compact('orders'));
    }

    public function products()
    {
        $products = Product::Paginate(5);
        
        return view('adminManageProducts', compact('products'));
    }
 
    public function cart()
    {
        $carts = Cart::with(['product'])
            ->get()
            ->groupBy('user_id');
        
        return view('adminManageCarts', compact('carts'));
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
        // Validate input data
        $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|email|unique:users,email|max:100',
            'password' => 'required|string|min:8',
            'role' => 'required|in:superuser,user',
        ]);

        // Create a new user
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->role = $request->input('role');
        $user->save();

        return redirect()->route('adminDashboard')->with('success', 'User created successfully!');
    }
}