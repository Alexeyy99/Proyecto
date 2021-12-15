<div>
    <form wire:submit.prevent="editar">
        <div class="card mx-auto" style="width: 40rem;">
            <h5 class="card-header">
                Editar venta
            </h5>

            <div class="card-body">
                @include('livewire.ventas.formulario')
            </div>

            <div class="card-footer">
                <button class="float-right btn btn-success btn-sm"><i
                        class="fa fa-save"></i> Guardar</button>
                <a href="{{ route('ventas.index') }}" class="btn btn-secondary btn-sm">Regresar</a>
            </div>
        </div>

    </form>
</div>
