<?php

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "newests" => Product::latest()->limit(4)->with(['user', 'category'])->get(),
        "ratings" => Product::orderByDesc('rating')->limit(4)->with(['user', 'category'])->get(),
        // "user" => User::all()->first()
    ]);
});

Route::get('/product', function () {
    return view('product.list', [
        "title" => "Product",
        "products" => Product::with(['user', 'category'])->get(),
        "categories" => Category::all()
    ]);
});

Route::get('/product/{product:id}', function (Product $product) {
    return view('product.detail', [
        "title" => $product->name,
        "product" => $product
    ]);
});

Route::get('/category', function () {
    return view('category.list', [
        "title" => "Category",
        "categories" => Category::all()
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/login', function () {
    return view('user.login', [
        "title" => "Login",
        "user" => User::all()->first()
    ]);
});

Route::get('/register', function () {
    return view('user.register', [
        "title" => "Register"
    ]);
});