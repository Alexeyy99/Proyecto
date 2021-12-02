<div>
    <div class="mx-auto card" style="width: 23rem;">
        <img src="{{ Storage::disk('public')->url($carro->foto != null ? $carro->foto : 'images/carros/default.jpg') }}"
            class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">¿Quieres eliminar este vehiculo?</h5>
            <p class="card-text"><b>Modelo:</b> {{ $carro->modelo }}</p>
            <p class="card-text"><b>Del año: </b>{{ $carro->año }} de color {{ $carro->color }}</p>
        </div>
        <div class="card-footer">
            <button wire:click="delete" class="float-right btn btn-primary btn-sm">Confirmar</button>
            <a href="{{ route('carros.index') }}" class="btn btn-danger btn-sm">Cancelar</a>
        </div>
    </div>
</div>
