<?php

namespace App\Http\Livewire\Carros;

class ReglasCarros
{
    public static function reglas()
    {
        return [
            'carro.modelo' => 'required|string',
            'carro.precio' => 'numeric|required',
            'carro.color' => 'required|string',
            'carro.tipocarro' => 'required',
            'carro.año' => 'numeric|required',
            'carro.cilindros'=> 'numeric',
            'foto' => 'nullable|image'
        ];
    }
}
