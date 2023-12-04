<?php

namespace App\Livewire;

use App\Models\Tip;
use Livewire\Component;

class Tips extends Component

{
    public function render()
    {
        $tips = Tip::take(6)->get();
        return view('livewire.tips', compact('tips'));
    }
}
