<?php

namespace App\Http\Livewire\Carros;

use Livewire\Component;
use App\Models\Carro;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class CarrosEdit extends Component
{
    use WithFileUploads;
    public Carro $carro;
    public $foto;

    public function mount($carro)
    {
        $this->carro = $carro;
    }

    public function render()
    {
        return view('livewire.carros.carros-edit');
    }

    public function editar()
    {
        $this->validate();
        if ($this->foto != null) {
            if ($this->carro->foto != null) {
                Storage::disk('public')->delete($this->carro->foto);
            }
            $this->carro->foto = Storage::disk('public')->put('images/carros', $this->foto);
        }
        $this->carro->save();
        return redirect(route('carros.index'));
    }

    protected function rules()
    {
        return ReglasCarros::reglas();
    }
}
