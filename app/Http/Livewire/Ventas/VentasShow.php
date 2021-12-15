<?php

namespace App\Http\Livewire\Ventas;


use App\Models\Venta;
use Livewire\Component;

class VentasShow extends Component
{

    public Venta $venta;

    public function render()
    {
        $data = Venta::join('usuarios', 'ventas.id_usuario', '=', 'usuarios.id')
        ->where('usuarios.id', '=', $this->venta->id_usuario)
        ->join('carros', 'ventas.id_carro', '=', 'carros.id')
        ->where('carros.id', '=', $this->venta->id_carro)
        ->select(
            'usuarios.*',
            'carros.*'
        )->paginate(10);
        $data = $data[0];
        return view('livewire.ventas.ventas-show', compact('data'));
    }
}
