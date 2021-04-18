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

    public function addComment()
    {
        if ($this->newComment == '') {
            return;
        }

        $comment = Comment::create([
            'body' => $this->newComment,
            'user_id' => 1,
        ]);

        $this->comments->prepend($comment);

        $this->newComment = '';
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
