<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){

        $products = Product::all();
        $categories = Category::all();

        return view('home.index', compact('products', 'categories'));

    }

}
