<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;


class DropdownCart extends Component
{

    #[On('cart')] 
    
    public function render() 
    {
        return view('livewire.dropdown-cart');
    }


}
