<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comments extends Component
{
    public $comments = [
        [
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipiscing elit. Quasi ex cupditidate quo commodi asperttur delectus neian necessitatubis.',
            'created_at' => '3 min ago',
            'creator' => 'Andres'
        ]
    ];

    public function addComment()
    {
        array_unshift($this->comments, [
            'body' => 'New Comment',
            'created_at' => '1 min ago',
            'creator' => 'Alberto'
        ]);
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
