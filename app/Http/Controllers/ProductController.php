<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $prod = Product::all();
        return view('products.index', compact('prod'));
    }


    public function create()
    {
        return view('products.create');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
        ]);
        Product::create($validatedData);
        return redirect()->route('products.index')->with('success', 'Product created successfully');
    }


    ///Updating and Deleting Products///
    public function edit($id)
    {
        $prod = Product::find($id);
        return view('products.edit', compact('prod'));
    }

    public function update(Request $request, $id)
    {
        $prod = Product::find($id);
        $prod->name = $request->input('name');
        $prod->price = $request->input('price');
        $prod->description = $request->input('description');
        $prod->update();
        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

    //delet
    public function destroy($id)
    {
        $prod = Product::find($id);
        $prod->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }

}
