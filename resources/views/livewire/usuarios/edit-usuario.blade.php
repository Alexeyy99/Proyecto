<div>
    <form wire:submit.prevent="editarUser">
        <div class="card">
            <div class="card-header">
                Editar usuario
            </div>

            <div class="card-body">
                @include('livewire.usuarios.formulario')
            </div>

            <div class="card-footer">
                <button class="float-right btn btn-primary"><i class="fa fa-edit"></i> Editar</button>
                <a href="{{ route('users.index') }}" class="btn btn-secondary"><i class="fa fa-home"></i>
                    Regresar</a>
            </div>
        </div>
    </form>
</div>
