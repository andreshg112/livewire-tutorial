<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Illuminate\Support\Carbon;
use Livewire\Component;

class Comments extends Component
{
    /** @var \Illuminate\Database\Eloquent\Collection */
    public $comments;

    public $newComment;

    public function mount()
    {
        $this->comments = Comment::latest()->get();
    }

    public function updated($field)
    {
        $this->validateOnly($field, ['newComment' => ['required', 'max:255']]);
    }

    public function addComment()
    {
        $this->validate(['newComment' => ['required', 'max:255']]);

        $createdComment = Comment::create([
            'body' => $this->newComment,
            'user_id' => 1,
        ]);

        $this->comments->prepend($createdComment);

        $this->newComment = '';
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
