<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\User;

class Modal extends Component
{

    public $user;
    public $message;

    public function loadUser($id)
    {
        $user = User::find($id);
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.modal',[
            'user' => $this->user
        ]);
    }
}
