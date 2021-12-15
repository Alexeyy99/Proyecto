<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;

class CreateUsuario extends Component
{
    public function mount()
    {
        $this->usuario = new Usuario();
    }

    use WithFileUploads;
    public Usuario $usuario;
    public $foto;
    public $confirmar_password;
    public $password;

    public function render()
    {
        return view('livewire.usuarios.create-usuario');
    }

    public function crear()
    {
        $this->validate();
        $this->usuario->password = Hash::make($this->usuario->password);
        if ($this->foto != null) {
            $this->usuario->foto = Storage::disk('public')->put('/images/usuarios', $this->foto);
        }
        $this->usuario->save();
        $this->emit('alert-user-create', 'Te has registrado correctamente');
        return redirect(route('users.index'));
    }

    protected function rules()
    {
        return ReglasUsuarios::reglas();
    }
}
