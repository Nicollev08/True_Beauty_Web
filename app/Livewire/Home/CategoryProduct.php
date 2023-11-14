<?php

namespace App\Livewire\Home;

use Livewire\Component;

class CategoryProduct extends Component
{
    public $category;

    public $products = [];

    public function loadPosts(){
        $this->products = $this->category->products()->take(15)->get();

        $this->emit('glider', $this->category->id);
    }

    public function render()
    {
        return view('livewire.home.category-product');
    }
}
