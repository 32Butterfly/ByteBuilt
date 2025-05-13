<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class UploadManager extends Controller
{
    function uploadPost(Request $request) {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $image = $request->file('image');
        $randomName = Str::random(64) . '.' . $image->getClientOriginalExtension();
        $path = $image->storeAs('', $randomName, 'public');

        $user = Auth::user();
        if ($user->profile_picture) {
            // Delete the old image if it exists
            Storage::disk('public')->delete($user->profile_picture);
        }
        $user->profile_picture = $path;
        $user->save();
    
        return redirect()->route('profile')->with('success', 'Image uploaded and profile picture updated!');
    }
}
