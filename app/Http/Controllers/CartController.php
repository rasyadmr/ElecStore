<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function list() {
        $carts = Cart::where('user_id', 'LIKE', auth()->user()->id)->get();

        return view('cart.list', [
            'title' => 'Cart',
            'carts' => $carts
        ]);
    }

    public function checkout() {
        $carts = Cart::where('user_id', 'LIKE', auth()->user()->id)->get();
        $payments = ['Debit Card', 'Credit Card', 'Cash on Delivery', 'OVO', 'GoPay'];

        return view('cart.checkout', [
            'title' => 'Checkout',
            'carts' => $carts,
            'payments' => $payments
        ]);
    }

    public function add(Request $request) {
        $request->validate([
            'product_id' => 'exists:products,id',
            'quantity' => 'required|numeric|min:1'
        ]);

        $cart = Cart::where('user_id', 'LIKE', auth()->id())->where('product_id', 'LIKE', $request->product_id)->first();

        if ($cart) {
            $cart->increment('quantity', $request->quantity);
        } else {
            Cart::create([
                'user_id' => auth()->id(),
                'product_id' => $request->product_id,
                'quantity' => $request->quantity
            ]);
        }

        return redirect()->back()->with("success", "Product has been added to cart!");
    }

    public function destroy(Request $request) {
        $request->validate([
            'cart_id' => 'exists:carts,id'
        ]);


        $cart = Cart::where('user_id', 'LIKE', auth()->id())->where('id', 'LIKE', $request->cart_id)->first();

        if (!$cart) {
            return redirect()->back()->with("error", "Product not found in cart!");
        }

        $cart->deleteOrFail();

        return redirect()->back()->with("success", "Product has been removed from the cart!");
    }

    public function paid(Request $request) {
        $request->validate([
            'payment_method' => 'required|string'
        ]);

        $carts = Cart::where('user_id', 'LIKE', $request->user_id)->get();

        if ($carts->isEmpty()) {
            return redirect()->route('cart.list')->with('error', 'Cart is empty, failed to checkout!');
        }

        Transaction::create([
            'user_id' => $request->user_id,
            'payment_method' => $request->payment_method,
            'status' => 'pending',
            'total' => $request->total
        ]);

        foreach ($carts as $cart) {
            TransactionDetail::create([
                'product_id' => $cart->product->id,
                'transaction_id' => Transaction::latest()->first()->id,
                'quantity' => $cart->quantity
            ]);

            $cart->deleteOrFail();
        }

        return redirect(route('home'))->with("success", "Checkout success, Thank you!");
    }
}
