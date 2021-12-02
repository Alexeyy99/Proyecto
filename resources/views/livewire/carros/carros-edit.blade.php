<div>
    <form wire:submit.prevent="editar">
        <div class="card">
            <div class="card-header">
                Editar carro
            </div>

            <div class="card-body">
                @include('livewire.carros.formulario')
            </div>

            <div class="card-footer">
                <button class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Editar</button>
                <a href="{{route('carros.index')}}" class="btn btn-secondary btn-sm">Regresar</a>
            </div>
        </div>
    </form>
</div>
