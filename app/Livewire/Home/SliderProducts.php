<?php

namespace App\Livewire\Home;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class SliderProducts extends Component
{
    public function render()
    {
        $categories = Category::all();
        $products = Product::all();

        return view('livewire.home.slider-products', [
            'categories' => $categories,
            'products' => $products,
        ]);
    }
}
