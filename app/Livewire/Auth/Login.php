<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.auth')]
class Login extends Component
{
    #[Title('Login | SIEPG Matricula')]
    public function render()
    {
        return view('livewire.auth.login');
    }

    public function ingresar()
    {
        //
    }
}
