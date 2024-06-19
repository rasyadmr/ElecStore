<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/about', [MainController::class, 'about'])->name('about');

Route::get('/product', [ProductController::class, 'index'])->name('product.list');
Route::get('/product/new', [ProductController::class, 'add'])->name('product.add')->middleware('auth');
Route::get('/product/edit/{product:id}', [ProductController::class, 'edit'])->name('product.edit')->middleware(['auth', 'owner']);
Route::get('/product/{product:id}', [ProductController::class, 'show'])->name('product.detail')->middleware('auth');
Route::post('/product/new', [ProductController::class, 'store'])->name('product.store')->middleware('auth');
Route::post('/product/edit/{product:id}', [ProductController::class, 'update'])->name('product.update')->middleware(['auth', 'owner']);
Route::delete('/product/{product:id}', [ProductController::class, 'destroy'])->name('product.delete');

Route::get('/category', [CategoryController::class, 'index'])->name('category.list');

Route::get('/user/{user:username}', [UserController::class, 'profile'])->name('user.profile');
Route::get('/setting', [UserController::class, 'setting'])->name('user.setting')->middleware('auth');

Route::get('/cart', [CartController::class, 'list'])->name('cart.list')->middleware(['auth']);
Route::post('/product/{product:id}', [CartController::class, 'add'])->name('cart.add')->middleware('auth');
Route::post('/cart', [CartController::class, 'destroy'])->name('cart.delete')->middleware('auth');
Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout.view')->middleware('auth');
Route::post('/checkout', [CartController::class, 'paid'])->name('checkout.paid')->middleware('auth');


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'create'])->name('login.create');
Route::post('/logout', [LoginController::class, 'remove'])->name('logout')->middleware(['auth']);

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'create'])->name('register.create');
