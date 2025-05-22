<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    function login() {
        return view('login');
    }

    function register() {
        return view('register');
    }

    function loginPost(Request $request) {
        $request->validate([
            'email' => 'required|email|exists:users,email|max:100',
            'password' => 'required|min:6|max:30',
        ]);

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)) {
            return redirect()->intended(route('home'))->with('success', 'Login successful');
        } else {
            return redirect(route('login'))->with('error', 'Invalid credentials');
        }
    }

    function registerPost(Request $request) {
        $request->validate([
            'name' => 'required|max:30',
            'email' => 'required|email|unique:users,email|max:100',
            'password' => 'required|min:6|confirmed|max:30'
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);

        $user = User::create($data);

        if(!$user){
            return redirect(route('register'))->with('error', 'Registration failed, try again');
        } else{
            return redirect(route('login'))->with('success', 'Registration successful, login now');
        }
    }

    function logout() {
        Session::flush();
        Auth::logout();
        return redirect(route('home'))->with('success', 'Logout successful');
    }
}