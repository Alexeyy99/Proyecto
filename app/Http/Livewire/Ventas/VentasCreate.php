<?php

namespace App\Http\Livewire\Ventas;

use App\Models\Carro;
use App\Models\Usuario;
use App\Models\Venta;
use Livewire\Component;

class VentasCreate extends Component
{
    public function mount()
    {
        $this->venta = new Venta();
    }
    public Venta $venta;
    public function render()
    {
        $carros = Carro::all();
        $usuarios = Usuario::all();
        return view('livewire.ventas.ventas-create', compact('carros', 'usuarios'));
    }

    public function crear()
    {
        $this->validate();
        $this->venta->save();
        $this->emit('alert-venta', 'Se creo exitosamente la venta del auto');
        return redirect(route('ventas.index'));
    }

    public function rules()
    {
        return ReglasVentas::reglas();
    }
}
