<div>
    <div class="mx-auto card" style="width: 23rem;">
        <img src="{{ Storage::disk('public')->url($usuario->foto != null ? $usuario->foto : 'images/usuarios/noimage.jpg') }}"
            class="card-img-top">
        <div class="card-body">
            <h5 class="card-title">¿Quieres eliminar a este usuario?</h5>
            <p class="card-text"> Con el nombre de {{ $usuario->nombre }} y con el correo como:
                {{ $usuario->email }}</p>
            <button wire:click="delete" class="float-right btn btn-primary btn-sm">Confirmar</button>
            <a href="{{ route('users.index') }}" class="float-left btn btn-danger btn-sm">Cancelar</a>
        </div>
    </div>
</div>
