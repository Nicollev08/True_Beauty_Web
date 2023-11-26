<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke(Request $request)
    {
        session()->flash('flash.banner', 'Yay it works!');

        $categories = Category::all();

        return view('welcome', compact('categories'));
    }
}
