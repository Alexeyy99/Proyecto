<div>
    <div class="mx-auto card" style="width: 23rem;">
        <div class="card-body">
            <h5 class="card-title">¿Quieres eliminar esta venta del sistema?</h5>
            <p class="card-text"><b>Con el ID:</b> {{ $venta->id }}</p>
            <p class="card-text"><b>Usuario que adquirio el auto:</b> {{ $data->nombre }}</p>
            <p class="card-text"><b>Modelo: </b>{{ $data->modelo }} de color {{ $data->color }}</p>
        </div>
        <div class="card-footer">
            <button wire:click="delete" class="float-right btn btn-primary btn-sm">Confirmar</button>
            <a href="{{ route('ventas.index') }}" class="btn btn-danger btn-sm">Cancelar</a>
        </div>
    </div>
</div>

