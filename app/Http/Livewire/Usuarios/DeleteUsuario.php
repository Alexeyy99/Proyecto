<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Livewire\Component;
use Livewire\WithFileUploads;


class DeleteUsuario extends Component
{
    use WithFileUploads;
    public Usuario $usuario;
    public $foto;

    public function render()
    {
        return view('livewire.usuarios.delete-usuario');
    }

    public function delete(){
        $this->usuario->delete();
        return redirect(route('users.index'));
    }
}
