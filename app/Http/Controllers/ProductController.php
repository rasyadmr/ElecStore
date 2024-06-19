<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

    public function add() {
        return view('product.add', [
            "title" => "Add Product",
            "categories" => Category::all()
        ]);
    }

    public function edit(Product $product) {
        return view('product.edit', [
            "title" => "Edit Product",
            "product" => $product,
            "categories" => Category::all()
        ]);
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|integer',
            'category' => 'required',
            'specification' => 'required',
            'description' => 'required',
            'photo' => 'mimes:jpg,jpeg,png'
        ]);

        if ($request->photo) {
            $photo = $request->file('photo');
            $filename = date('Y-m-d-H-i-s').$photo->getClientOriginalName();
            $path = 'images/products/'.$filename;
            Storage::disk('public')->put($path, file_get_contents($photo));
        }

        Product::create([
            'name' => $validated['name'],
            'price' => $validated['price'],
            'category_id' => $validated['category'],
            'specification' => $validated['specification'],
            'description' => $validated['description'],
            'photo' => ($request->photo) ? $path : null,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('user.profile', ['user' => auth()->user()])->with('success', 'New product has been created!');
    }

    public function update(Request $request, Product $product) {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|integer',
            'category' => 'required',
            'specification' => 'required',
            'description' => 'required',
            'photo' => 'mimes:jpg,jpeg,png,webp'
        ]);

        if ($request->photo) {
            $photo = $request->file('photo');
            $filename = date('Y-m-d-H-i-s').$photo->getClientOriginalName();
            $path = 'images/products/'.$filename;
            Storage::disk('public')->put($path, file_get_contents($photo));
        }

        $product->name = $validated['name'];
        $product->price = $validated['price'];
        $product->category_id = $validated['category'];
        $product->specification = $validated['specification'];
        $product->description = $validated['description'];
        $product->photo = ($request->photo) ? $path : null;
        $product->save();

        return redirect()->route('user.profile', ['user' => auth()->user()])->with('success', 'New product has been created!');
    }

    public function destroy(Product $product) {
        $product->delete();

        return redirect()->route('user.profile', ['user' => auth()->user()])->with('success', 'Product has been deleted');
    }
}
