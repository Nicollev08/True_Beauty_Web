<?php

namespace App\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Attributes\On;
use Livewire\Component;

class ShoppingCart extends Component
{
    public function destroy(){
        Cart::destroy();
        $this->dispatch('cart');
    }

    public function delete($rowID){
        Cart::remove($rowID);
        $this->dispatch('cart');
    }
    
    #[On('cart')] 
    public function render()
    {
        return view('livewire.shopping-cart');
    }
}
