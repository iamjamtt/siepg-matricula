<?php

namespace App\Livewire\Auth;

use App\Models\Usuario;
use App\Models\UsuarioEstudiante;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('components.layouts.auth')]
class Login extends Component
{
    #[Validate('required|email')]
    public string $correoElectronico = '';
    #[Validate('required')]
    public string $contrasena = '';

    #[Title('Login | SIEPG Matricula')]
    public function render()
    {
        return view('livewire.auth.login');
    }

    public function ingresar()
    {
        $this->validate([
            'correoElectronico' => 'required|email',
            'contrasena' => 'required',
        ]);

        $usuarioEstudiante = UsuarioEstudiante::query()
            ->where('usuario_estudiante', $this->correoElectronico)
            ->first();

        if (!$usuarioEstudiante) {
            $this->dispatch('toast',
                tipo: 'error',
                mensaje: 'Credenciales incorrectas.',
            );
            return;
        }

        if ($usuarioEstudiante) {
            if (!Hash::check($this->contrasena, $usuarioEstudiante->usuario_estudiante_password)) {
                $this->dispatch('toast',
                    tipo: 'error',
                    mensaje: 'Credenciales incorrectas.',
                );
                return;
            } else {
                $this->dispatch('toast',
                    tipo: 'success',
                    mensaje: 'Bienvenido ' . $usuarioEstudiante->persona->primeros_nombres . '.',
                );

                Auth::login($usuarioEstudiante);
            }
        } else {
            $this->dispatch('toast',
                tipo: 'error',
                mensaje: 'Credenciales incorrectas.'
            );
            return;
        }

        return redirect()->intended(route('inicio.index'));
    }
}
