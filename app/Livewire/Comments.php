<?php

namespace App\Livewire;

use App\Models\Comment;
use Livewire\Component;

class Comments extends Component
{

    public $comments, $editedCommentId;
    public $showModal = false;
    public $editModal = false;

    public function mount()
    {
        $this->comments = Comment::with('user')->get();
    }

    public function openModal()
    {
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
        $this->editModal = false;
    }
    public function openEditModal($commentId)
    {
        $this->editModal = true;
        $this->editedCommentId = $commentId;
    }


    public function render()
    {
        return view('livewire.comments', ['comments' => $this->comments]);
    }
}
