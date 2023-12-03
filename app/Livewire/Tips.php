<?php

namespace App\Livewire;

use App\Models\Tip;
use Livewire\Component;

class Tips extends Component
{

    public function render()
    {
        $tips = Tip::all();
        return view('livewire.tips', compact('tips'));
    }
}
