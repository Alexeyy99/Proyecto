<div>
    <form wire:submit.prevent="crear">
        <div class="card">
            <div class="card-header">
                Añadir carro
            </div>

            <div class="card-body">
                @include('livewire.carros.formulario')
            </div>

            <div class="card-footer">
                <button wire:loading.attr="disabled" wire:target="foto" class="float-right btn btn-success btn-sm"><i class="fa fa-save"></i> Guardar</button>
                <a href="{{route('carros.index')}}" class="btn btn-secondary btn-sm">Regresar</a>
            </div>
        </div>
    </form>
</div>
