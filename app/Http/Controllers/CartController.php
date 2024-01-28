<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Product $product)
    {
        Cart::add($product->id, $product->name, 1, $product->price);
        return redirect()->back()->with('success', 'Product added to cart');
    }

    
    public function remove(Product $product)
    {
        Cart::remove($product->id);
        return redirect()->back()->with('success', 'Product removed from cart');
    }
}
