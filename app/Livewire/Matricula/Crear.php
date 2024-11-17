<?php

namespace App\Livewire\Matricula;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.app')]
class Crear extends Component
{
    #[Title('Crear Matricula | SIEPG Matricula')]
    public function render()
    {
        return view('livewire.matricula.crear');
    }
}
