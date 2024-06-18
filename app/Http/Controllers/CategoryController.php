<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return view('category.list', [
            "title" => "Category",
            "categories" => Category::all()
        ]);
    }
}
