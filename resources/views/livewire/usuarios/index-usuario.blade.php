<div wire:init="cargando">

    <div class="float-right mb-2">
        <a href="{{ route('users.create') }}" type="button" class="btn-sm btn btn-success"><i
                class="fa fa-user-plus"></i> Crear nuevo</a>

    </div>

    <div class="col-4 mb-2">
        <div class="input-group flex-nowrap">
            <span class="input-group-text"><i class="fa fa-search"></i></span>
            <input wire:model="search" type="text" class="form-control" placeholder="Buscar">
        </div>
    </div>

    @if (count($usuarios) > 0)
        <table class="table text-center table-striped">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th>Imagen</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <th scope="row">{{ $usuario->id }}</th>
                        <th>
                            <img style="border-radius: 100px; width: 60px; height: 60px;"
                                src="{{ Storage::disk('public')->url($usuario->foto != null ? $usuario->foto : 'images/usuarios/noimage.png') }}"
                                >
                        </th>
                        <td>{{ $usuario->nombre }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>
                            <a type="button" href="{{ route('users.show', $usuario) }}" class="btn btn-info btn-sm"><i
                                    class="fa fa-eye"></i></a>
                            <a type="button" href="{{ route('users.edit', $usuario) }}"
                                class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> </a>
                            <a type="button" href="{{ route('users.delete', $usuario) }}"
                                class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @else
        <img class="mx-auto d-block" style="width: 350px; height: 350px;"
            src="{{ Storage::disk('public')->url('images/otros/cargando.gif') }}" alt="">
    @endif


    {{ $cargado == true ? $usuarios->links() : null }}
</div>
