<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Livewire\Component;

class EditUsuario extends Component
{
    use WithFileUploads;
    public Usuario $usuario;
    public $foto;

    public function render()
    {
        return view('livewire.usuarios.edit-usuario');
    }

    public function editarUser()
    {
        $this->validate();
        if($this->foto != null) {
            if($this->usuario->foto != null){
                Storage::disk('public')->delete($this->usuario->foto);
            }
            $this->usuario->foto = Storage::disk('public')->put('images/usuarios', $this->foto);
        }
        $this->usuario->save();
        return redirect(route('users.index'));
    }

    protected function rules()
    {
        return ReglasUsuarios::reglas();
    }
}
