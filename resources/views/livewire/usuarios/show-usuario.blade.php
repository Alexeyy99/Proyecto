<div>
    <div class="mx-auto card" style="width: 23rem;">
        <img 
            src="{{ Storage::disk('public')->url($usuario->foto != null ? $usuario->foto : 'images/usuarios/noimage.png') }}"
            class="mx-auto mb-3 card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">ID del usuario: {{ $usuario->id }}</h5>
            <p class="card-text"><b>Nombre:</b> {{ $usuario->nombre }}</p>
            <p class="card-text"><b>Correo:</b> {{ $usuario->email }}</p>
        </div>

        <div class="card-footer text-center">
            <a href="{{ route('users.index') }}" class="btn btn-primary"><i class="fa fa-home"></i> Regresar</a>
        </div>
    </div>
</div>
