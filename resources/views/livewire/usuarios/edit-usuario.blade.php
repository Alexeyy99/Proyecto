<div>
    <form wire:submit.prevent="editar">
        <div class="card">
            <div class="card-header">
                Editar usuario
            </div>

            <div class="card-body">
                @include('livewire.usuarios.formulario')
            </div>

            <div class="card-footer">
                <button class="float-right btn btn-primary btn-sm"><i class="fa fa-edit"></i> Editar</button>
                <a href="{{route('users.index')}}" class="btn btn-secondary btn-sm">Regresar</a>
            </div>
        </div>
    </form>
</div>
