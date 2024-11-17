<?php

namespace App\Livewire\Matricula;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.app')]
class Index extends Component
{
    #[Title('Mis Matriculas | SIEPG Matricula')]
    public function render()
    {
        return view('livewire.matricula.index');
    }
}
