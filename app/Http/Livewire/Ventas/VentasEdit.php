<?php

namespace App\Http\Livewire\Ventas;

use App\Models\Carro;
use App\Models\Usuario;
use App\Models\Venta;
use Livewire\Component;

class VentasEdit extends Component
{
    public Venta $venta;

    public function mount($venta)
    {
        $this->venta = $venta;
    }

    public function render()
    {
        $carros = Carro::all();
        $usuarios = Usuario::all();
        return view('livewire.ventas.ventas-edit', compact('carros', 'usuarios'));
    }

    public function editar()
    {
        $this->validate();
        $this->venta->save();
        $this->emit('alert-venta-edit', 'Se modifico correctamente la venta');
        return redirect(route('ventas.index'));
    }

    protected function rules()
    {
        return ReglasVentas::reglas();
    }
}
