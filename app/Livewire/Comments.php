<?php

namespace App\Livewire;

use App\Models\Comment;
use Livewire\Component;

class Comments extends Component
{

    public $comments, $editedCommentId, $editedRating;
    public $showModal = false;
    public $editModal = false;

    public function mount()
    {
        $this->comments = Comment::with('user')->get();
        $this->editedRating = 0;
    }

    public function handleCommentButtonClick()
    {
        if (auth()->check()) {
            $this->openModal();
        } else {
            return redirect()->route('login');
        }
    }


    public function openModal()
    {
        $this->showModal = true;
        $this->editModal = false;
    }

    public function closeModal()
    {
        $this->showModal = false;
        $this->resetForm(); // Agrega este método si es necesario restablecer el formulario
    }

    public function closeEditModal()
    {
        $this->editModal = false;
        $this->resetForm(); // Agrega este método si es necesario restablecer el formulario
    }

    public function resetForm()
    {
        $this->editedCommentId = null;
        $this->editedRating = 0;
    }

    public function openEditModal($commentId)
    {
        $this->editModal = true;
        $this->showModal = false;
        $this->editedCommentId = $commentId;
        $this->editedRating = Comment::find($commentId)->rating;
    }


    public function render()
    {
        return view('livewire.comments', [
            'comments' => $this->comments,
            'editedRating' => $this->editedRating,
        ]);
    }
}
