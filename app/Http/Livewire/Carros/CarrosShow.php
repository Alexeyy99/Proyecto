<?php

namespace App\Http\Livewire\Carros;
use App\Models\Carro;
use Livewire\Component;

class CarrosShow extends Component
{
    public Carro $carro;
    public function render()
    {
        return view('livewire.carros.carros-show');
    }
}
