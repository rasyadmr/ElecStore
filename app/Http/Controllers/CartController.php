<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function list() {
        return view('cart.list', [
            'title' => 'Cart'
        ]);
    }

    public function checkout() {
        return view('cart.checkout', [
            'title' => 'Checkout'
        ]);
    }

    public function add(Product $product, Request $request) {
        $request->validate([
            'quantity' => 'required|numeric|min:1'
        ]);

        $cart = session()->get('cart', []);

        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity'] = $cart[$product->id]['quantity'] + $request->quantity;
        } else {
            $cart[$product->id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "photo" => $product->photo
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with("success", "Product has been added to cart!");
    }

    public function destroy(Request $request) {
        $cart = session()->get('cart');

        if (isset($cart[$request->id])) {
            unset($cart[$request->id]);
            session()->put('cart', $cart);
        }
        

        session()->flash('success', 'Product has been successfully removed from the cart!');

        return back();
    }

    public function paid(Request $request) {
        session()->forget('cart');
        return redirect(route('home'))->with("success", "Checkout success! Thank you.");
    }
}
