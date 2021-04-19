<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Login extends Component
{
    public $form = [
        'email' => '',
        'password' => '',
    ];

    public function submit()
    {
    }

    public function render()
    {
        return view('livewire.login');
    }
}
