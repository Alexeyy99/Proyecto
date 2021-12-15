<?php

namespace App\Http\Livewire\Ventas;

use App\Models\Venta;
use Livewire\Component;

class VentasIndex extends Component
{
    public $search;
    public $cargado = false;
    public function render()
    {
        $ventas = ($this->cargado == true) ? Venta::join('usuarios', 'ventas.id_usuario', '=', 'usuarios.id')
            ->join('carros', 'ventas.id_carro', '=', 'carros.id')
            ->select(
                'ventas.*',
                'usuarios.nombre',
                'usuarios.email',
                'carros.modelo'
            )->paginate(10) : [];
        return view('livewire.ventas.ventas-index', compact('ventas'));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function cargando()
    {
        $this->cargado = true;
    }
}
