<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class EditUsuario extends Component
{
    use WithFileUploads;
    public Usuario $usuario;
    public $foto;
    public $confirmar_password;
    public $password;

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
        if($this->password){
            $this->usuario->password = Hash::make($this->password);
        }
        $this->usuario->save();
        $this->emit('alert-user-edit', 'Se ha editado correctamente');
        return redirect(route('users.index'));
    }

    protected function rules()
    {
        return ReglasUsuarios::reglas($this->usuario->id);
    }
}
