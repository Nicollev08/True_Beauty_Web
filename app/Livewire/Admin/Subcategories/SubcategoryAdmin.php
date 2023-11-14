<?php

namespace App\Livewire\Admin\Subcategories;

use Livewire\Component;

class SubcategoryAdmin extends Component
{
    public $category;

    public $openModal = false;

    public function save(){
        $this->validate([
            'name' => 'required'
        ]);

        $this->category->subcategories()->create([
            'name' => $this->name
        ]);

        $this->reset(['openModal', 'name']);
    }
    
    public function render()
    {
        return view('livewire.admin.subcategories.subcategory-admin');
    }
}
