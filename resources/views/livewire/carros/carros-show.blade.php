<div>
    <div class="mx-auto card" style="width: 23rem;">
        <img 
            src="{{ Storage::disk('public')->url($carro->foto != null ? $carro->foto : 'images/carros/default.jpg') }}"
            class="mx-auto mb-3 card" alt="...">
        <div class="card-body">
            <p class="card-text">{{ $carro->modelo }}</p>
            <p class="card-text">{{ $carro->año }}</p>
        </div>
        <div class="card-footer text-center">
            <a href="{{ route('carros.index') }}" class="btn btn-primary"><i class="fa fa-home"></i> Regresar</a>
        </div>
    </div>
</div>
