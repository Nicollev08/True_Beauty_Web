<?php

namespace App\Livewire\Home;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class CategoryProducts extends Component
{
    // public $category;
    // public $products = [];

    // protected $listeners = ['glider'];

    // public function mount()
    // {
    //     $this->loadPosts();
    // }

    // // public function loadPosts()
    // // {
    // //     $this->products = $this->category->products()->take(15)->get();
    // //     $this->dispatch('glider', $this->category->id);
    // // }

    public function render()
    {
        Category::all();
        $products=Product::all();
        return view('livewire.home.category-products', compact('products'));
    }
}
