<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class Services extends Component
{

    public function services()
    {
        $data = Service::all();
    }



    public function render()
    {
        $data = Service::all();
        return view('livewire.services', compact('data'));
    }
}
