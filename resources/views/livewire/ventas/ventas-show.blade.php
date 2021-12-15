<div>
    <div class="mx-auto card" style="width: 20rem;">
        <div class="card-header">
            <h5 class="card-title text-center mb-1">Datos de la venta</h5>
        </div>
        <div class="card-body">
            <p class="card-text"> Id de la venta: <b>{{ $venta->id }}</b></p>
            <p class="card-text">Nombre del usuario: <b>{{ $data->nombre }}</b></p>
            <p class="card-text">Modelo del carro: <b>{{ $data->modelo }}</b></p>
        </div>
        <div class="card-footer text-center">
            <a href="{{ route('ventas.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-home"></i> Regresar</a>
        </div>
    </div>
</div>
