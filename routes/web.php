<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/about', [MainController::class, 'about'])->name('about');

Route::get('/product', [ProductController::class, 'index'])->name('product.list');
Route::get('/product/{product:id}', [ProductController::class, 'show'])->name('product.detail');

Route::get('/category', [CategoryController::class, 'index'])->name('category.list');


Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::get('/register', [RegisterController::class, 'index'])->name('register');