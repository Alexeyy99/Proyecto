<?php

namespace App\Http\Livewire\Carros;

use Livewire\Component;
use App\Models\Carro;
use Livewire\WithFileUploads;

class CarrosDelete extends Component
{
    use WithFileUploads;
    public Carro $carro;
    public $foto;
    public function render()
    {
        return view('livewire.carros.carros-delete');
    }

    public function delete()
    {
        $this->carro->delete();
        return redirect(route('carros.index'));
    }
}
