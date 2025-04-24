<?php

namespace App\Http\Controllers;

use App\Models\User;

class AdminDashboardController extends Controller
{
    public function index()
    {
        // Fetch users from the database
        $users = User::all();
        
        // Pass the users data to the view
        return view('adminDashboard', compact('users'));   // Update the view name if needed
    }
}
