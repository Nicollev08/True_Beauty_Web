<?php

namespace App\Livewire\Home;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class SliderProducts extends Component
{
    public $category;

    public function mount($category = null)
    {
        $this->category = $category ?? Category::first();
    }

    public function updateCategory()
    {
        $this->category->refresh();
    }

    public function render()
    {
        $categories = Category::all(); // Asegúrate de obtener las categorías aquí
        return view('livewire.home.slider-products', compact('categories'));
    }
}
