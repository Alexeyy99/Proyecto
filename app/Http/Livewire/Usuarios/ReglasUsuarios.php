<?php

namespace App\Http\Livewire\Usuarios;

class ReglasUsuarios {

    public static function reglas($id = null){

        $validarpassword = ($id) ? 'nullable|min:8' : 'required|min:8';
        return [
            'usuario.nombre' => 'string|required',
            'usuario.email' => 'email|required|unique:usuarios,email,' . $id,
            'password' => $validarpassword,
            'confirmar_password'=> 'same:password',
            'foto' => 'nullable|image'
        ];
    }
}
