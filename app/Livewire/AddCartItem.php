<?php

namespace App\Livewire;

use Livewire\Component;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Storage;
use Gloudemans\Shoppingcart\Contracts\Buyable;

class AddCartItem extends Component
{
    public $product, $quantity;
   public $options = [];

    public $qty = 1;

    public function mount()
    {
        $this->quantity = quantity($this->product->id);

        //$this->image_path = Storage::url($this->product->image_path);
        //$this->image_path = Storage::url($this->product->image_path);
        // Agrega la siguiente línea para imprimir la URL en la consola del servidor
        $this->options['image_path'] = Storage::url($this->product->image_path);

       // dd($this->options);

       // dd($this->image_path);
    }

    public function decrement()
    {
        $this->qty = $this->qty - 1;
    }

    public function increment()
    {
        $this->qty = $this->qty + 1;
    }

    public function addItem()
    {
        Cart::add([
            'id' => $this->product->id,
            'name' => $this->product->name,
            'qty' => $this->qty,
            'price' => $this->product->price,
            'weight' => 550,
            'options' => $this->options,
        ]);
        $this->quantity = qty_available($this->product->id);

        $this->reset('qty');

        $this->dispatch('cart');
    }
    public function render()
    {
        return view('livewire.add-cart-item');
    }
}
