<?php

namespace App\Http\Livewire\Carros;

use App\Models\Carro;
use Livewire\Component;
use Livewire\WithPagination;

class CarrosIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $cargado = false;

    public function render()
    {
        $carros = ($this->cargado==true) ? Carro::where('modelo', 'LIKE', '%' . $this->search . '%')
            ->orwhere('tipocarro', 'LIKE', '%' . $this->search . '%')
            ->orwhere('año', 'LIKE', '%' . $this->search . '%')
            ->paginate(10) : [];
        return view('livewire.carros.carros-index', compact('carros'));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function cargando(){
        $this->cargado = true;
    }
}
