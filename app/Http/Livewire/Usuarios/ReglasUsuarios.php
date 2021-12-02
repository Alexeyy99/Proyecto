<?php

namespace App\Http\Livewire\Usuarios;

class ReglasUsuarios {

    public static function reglas(){
        return [
            'usuario.nombre' => 'string|required',
            'usuario.email' => 'string|required',
            'usuario.password' => 'string|required',
            'usuario.foto' => 'nullable'
        ];
    }
}
