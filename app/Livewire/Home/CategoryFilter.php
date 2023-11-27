<?php

namespace App\Livewire\Home;

use Livewire\Component;

use Livewire\WithPagination;

use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;

class CategoryFilter extends Component
{
    use WithPagination;

    public $category, $subcategoria;

    public $view = "grid";


    protected $queryString = ['subcategoria'];

    public function limpiar()
    {
        $this->reset(['subcategoria']);
    }


    public function updatedSubcategoria()
    {
        $this->resetPage();
    }

    public function updatedMarca()
    {
        $this->resetPage();
    }

    public function render()
    {

        $productsQuery = Product::query()->whereHas('subcategory.category', function (Builder $query) {
            $query->where('id', $this->category->id);
        });

        if ($this->subcategoria) {
            $productsQuery = $productsQuery->whereHas('subcategory', function (Builder $query) {
                $query->where('id', $this->subcategoria);
            });
        }

        $products = $productsQuery->paginate(20);

        return view('livewire.home.category-filter', compact('products'));
    }
}