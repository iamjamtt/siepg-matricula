<?php

namespace App\Livewire\Inicio;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.app')]
class Index extends Component
{
    #[Title('Inicio | SIEPG Matricula')]
    public function render()
    {
        return view('livewire.inicio.index');
    }
}
