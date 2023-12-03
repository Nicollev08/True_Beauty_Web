<?php

namespace App\Livewire\Admin;

use App\Models\Tip;
use Livewire\Component;
use Livewire\WithPagination;

class TipsIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap'; 
   
    public $search = '';

    public function updatingSearch(){
        $this->resetPage();
    }
    
 
    public function render()
    {
        $tips = Tip::search($this->search)->paginate();

        return view('livewire.admin.tips-index', [
            'tips' => $tips,
        ]);
    }
}
