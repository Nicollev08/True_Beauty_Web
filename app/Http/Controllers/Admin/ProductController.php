<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Subcategory;
use Livewire\WithPagination;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.products.index')->only('index');
        $this->middleware('can:admin.products.create')->only('create', 'store');
        $this->middleware('can:admin.products.edit')->only('edit', 'update');
        $this->middleware('can:admin.products.destroy')->only('destroy');
    }

    public function index(Request $request)
    {
        $products = Product::all();

        return view('admin.products.index', compact('products'));
    }


    public function create()
    {
        $subcategories = Subcategory::all();
        $products = Product::all();
        return view('admin.products.create', compact('products', 'subcategories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image_path' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required',
            'subcategory_id' => 'required'
        ]);

        $sku = uniqid();

        $request->merge(['sku' => $sku]);


        $product = new Product($request->except('image_path'));

        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('public/products_images');
            $product->image_path = 'products_images/' . basename($imagePath);
        }

        $product->save();

        return redirect()->route('admin.products.index')->with('info', 'Producto creado exitósamente');
    }

    public function edit(Product $product)
    {
        $subcategories = Subcategory::all();
        $products = Product::all();

        return view('admin.products.edit', compact('product', 'subcategories'));
    }


    public function update(Request $request, Product $product)
    {
        $request->validate([
            'sku',
            'name' => 'required',
            'description' => 'required',
            'image_path' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'price' => 'required',
            'subcategory_id' => 'required'
        ]);

        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('public/products_images');
            $product->image_path = 'products_images/' . basename($imagePath);
        }

        $product->update($request->except('image_path'));

        return redirect()->route('admin.products.index')->with('info', 'Producto actualizado exitosamente.');
    }


    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index')->with('info', 'Producto eliminado exitosamente.');
    }
}
