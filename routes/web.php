<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/product', function () {
    return view('product.list', [
        "title" => "Product"
    ]);
});

Route::get('/category', function () {
    return view('category.list', [
        "title" => "Category"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/login', function () {
    return view('user.login', [
        "title" => "Login"
    ]);
});

Route::get('/register', function () {
    return view('user.register', [
        "title" => "Register"
    ]);
});