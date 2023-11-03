<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json(compact('products'));
    }

    public function create()
    {
        return response()->json(compact('product'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'precio' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $product = new Product($request->except('image'));
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/product_images');
            $product->image = 'product_images/' . basename($imagePath);
        }
    
        $product->save();

        return response()->json($product, 201);
    }

    public function show(Product $product)
    {
        return response()->json(compact('products'));
    }

    public function edit(Product $product)
    {
        return response()->json(compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'precio' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $this->processImage($request, $product);

        $product->update($request->all());

        return response()->json(compact('product'));
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(['message' => 'Producto eliminado exitosamente.']);
    }

    private function processImage(Request $request, Product $product)
    {
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/product_images');
            $product->image = 'product_images/' . basename($imagePath);
        }
    }
}
