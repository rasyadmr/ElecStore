<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {
        return view('home', [
            "title" => "Home",
            "newests" => Product::latest()->limit(4)->with(['user', 'category'])->get(),
            "ratings" => Product::orderByDesc('rating')->limit(4)->with(['user', 'category'])->get(),
        ]);
    }

    public function about() {
        return view('about', [
            "title" => "About"
        ]);
    }
}
