<?php

namespace App\Http\Livewire\Carros;

use App\Models\Carro;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class CarrosCreate extends Component
{
    public function mount()
    {
        $this->carro = new Carro();
    }

    use WithFileUploads;
    public Carro $carro;
    public $foto;

    public function render()
    {
        return view('livewire.carros.carros-create');
    }

    public function crear()
    {
        $this->validate();
        if ($this->foto != null) {
            $this->carro->foto = Storage::disk('public')->put('/images/carros', $this->foto);
        }
        $this->carro->save();
        return redirect(route('carros.index'));
    }

    protected function rules()
    {
        return ReglasCarros::reglas();
    }
}
