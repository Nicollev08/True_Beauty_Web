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

    protected $listeners = ['categoryUpdated' => 'updateProducts'];

    public function mount($category)
    {
        $this->category = $category;
        $this->updateProducts();
    }

    public function updateProducts()
    {
        $this->products = $this->category->products; // Accede directamente a los productos de la categoría
    }


    public function render()
    {
        $categories = Category::all();
        return view('livewire.home.category-products', compact('categories'));
    }
}
