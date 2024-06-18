<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('user.register', [
            "title" => "Register"
        ]);
    }

    public function create(Request $request) {
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

        User::create($validated);

        return redirect()->route('login')->with('success', 'New account has been created!');
    }
}
