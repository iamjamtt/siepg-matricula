<?php

namespace App\Livewire\Components\CardUser;

use App\Models\UsuarioEstudiante;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.components.card-user.index');
    }

    #[Computed()]
    public function usuario()
    {
        $usuario = UsuarioEstudiante::query()
            ->find(Auth::user()->id_usuario_estudiante);

        return $usuario;
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
