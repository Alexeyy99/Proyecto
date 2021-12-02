<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class CreateUsuario extends Component
{
    public function mount()
    {
        $this->usuario = new Usuario();
    }

    use WithFileUploads;
    public Usuario $usuario;
    public $foto;


    public function render()
    {
        return view('livewire.usuarios.create-usuario');
    }

    public function crear()
    {
        $this->validate();
        if ($this->foto != null) {
            $this->usuario->foto = Storage::disk('public')->put('/images/usuarios', $this->foto);
        }
        $this->usuario->save();
        return redirect(route('users.index'));
    }

    protected function rules()
    {
        return ReglasUsuarios::reglas();
    }
}
