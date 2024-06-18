<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::filter(request(['search', 'category']))->with(['user', 'category'])->paginate(8);

        return view('product.list', [
            "title" => "Product",
            "products" => $products,
            "categories" => Category::all()
        ]);
    }

    public function show(Product $product) {
        return view('product.detail', [
            "title" => $product->name,
            "product" => $product
        ]);
    }
}
