<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UploadManager extends Controller
{
    function uploadPost(Request $request) {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $image = $request->file('image');
        $randomName = Str::random(64) . '.' . $image->getClientOriginalExtension();
        $path = $image->storeAs('', $randomName, 'public');
    
        // Update the user's profile picture
        $user = Auth::user();
        $user->profile_picture = $path;
        $user->save();
    
        return redirect()->route('profile')->with('success', 'Image uploaded and profile picture updated!');
    }
}
