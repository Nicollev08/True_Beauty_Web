<?php

namespace App\Livewire\Home;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class CategoryProducts extends Component
{
    public $category;
    public $products;

    public function mount($category)
    {
        $this->category = $category;
        $this->updateProducts();
    }

    public function updateProducts()
    {
        $this->products = $this->category->products()->where('status', 2)->get();
    }

    public function render()
    {
        return view('livewire.home.category-products');
    }
    
}
