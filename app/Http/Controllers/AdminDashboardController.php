<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // Fetch users from the database
        $users = User::all();
        
        // Pass the users data to the view
        return view('adminDashboard', compact('users'));   // Update the view name if needed
    }

    public function products()
    {
        // Fetch users from the database
        $products = Product::all();
        
        // Pass the users data to the view
        return view('adminManageProducts', compact('products'));   // Update the view name if needed
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
}
