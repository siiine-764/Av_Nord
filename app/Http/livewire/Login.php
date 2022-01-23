<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Login extends Component{

    public $search = '';

    public function render()
    {
        return view('livewire.login');
    }
}
