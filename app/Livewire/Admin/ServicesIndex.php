<?php

namespace App\Livewire\Admin;


use Livewire\Component;
use App\Models\Service;
use Livewire\WithPagination;

class ServicesIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap'; 
   
    public $search = '';

    public function updatingSearch(){
        $this->resetPage();
    }
 
    public function render()
    {
        $services = Service::search($this->search)->paginate();
        return view('livewire.admin.services-index', compact('services'));
    }

}
