<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function profile(User $user) {
        return view('user.profile', [
            'title' => $user->name,
            'user' => $user
        ]);
    }

    public function setting() {
        return view('user.edit', [
            'title' => 'Edit Profile',
        ]);
    }

    public function update(Request $request, User $user) {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|unique:users,username|max:255|alpha:ascii|lowercase',
            'email' => 'required|email:dns|unique:users,email',
            'phonenumber' => 'max:20',
            'address' => 'required',
            'photo' => '',
            'password' => 'required|confirmed|min:8|max:50',
            'password_confirmation' => 'required',
            'tnc' => 'required'
        ]);

        if ($request->photo) {
            $photo = $request->file('photo');
            $filename = date('Y-m-d-H-i-s').$photo->getClientOriginalName();
            $path = 'images/users/'.$filename;
            Storage::disk('public')->put($path, file_get_contents($photo));
            $validated['photo'] = $path;
        }

        $validated['password'] = Hash::make($validated['password']);

        $user->update($validated);

        return redirect()->route('login')->with('success', 'New account has been created!');
    }
}
