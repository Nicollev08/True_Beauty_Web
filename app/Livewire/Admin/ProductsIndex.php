<?php

namespace App\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap'; 
   
    public $search = '';

    public function updatingSearch(){
        $this->resetPage();
    }
    
 
    public function render()
    {
        $products = Product::search($this->search)->paginate();

        return view('livewire.admin.products-index', [
            'products' => $products,
        ]);
    }
}
