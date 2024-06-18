<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('user.login', [
            "title" => "Login"
        ]);
    }

    public function create(Request $request) {
        $request->validate([
            'username' => 'required|max:255|alpha:ascii|lowercase',
            'password' => 'required|min:8|max:50'
        ]);

        if (Auth::guard('web')->attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect()->intended(route('home'));
        }

        return back()->with('failed', 'The credentials are incorrect!');
    }

    public function remove(Request $request) {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('home');
    }
}
