<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Product $product){

        $subcategories = Subcategory::all();
        $categories = Category::all();
        $products = Product::all();
        return view('products.show', compact('products'));
    }
}
