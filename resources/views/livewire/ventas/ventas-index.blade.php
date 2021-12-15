<div wire:init="cargando">

    <div class="float-right mb-2">
        <a href="{{ route('ventas.create') }}" type="button" class="btn-sm btn btn-success"><i
                class="fa fa-plus-circle"></i> Crear nueva venta</a>

    </div>

    <div class="col-3 mb-2">
        <div class="input-group flex-nowrap">
            <span class="input-group-text"><i class="fa fa-search"></i></span>
            <input wire:model="search" type="text" class="form-control" placeholder="Buscar">
        </div>
    </div>

    @if (count($ventas) > 0)
        <table class="table text-center table-striped">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th>Nombre de usuario</th>
                    <th scope="col">Carro adquirido</th>
                    <th scope="col">Fecha de compra</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ventas as $venta)
                    <tr>
                        <th scope="row">{{ $venta->id }}</th>
                        <td>{{ $venta->nombre }}</td>
                        <td><span class="badge badge-pill badge-warning">{{ $venta->modelo }}</span></td>
                        <td><span class="badge badge-pill badge-primary">{{ $venta->created_at }}</span></td>
                        <td>
                            <a type="button" href="{{route('ventas.show', $venta)}}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                            <a type="button" href="{{route('ventas.edit', $venta)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> </a>
                            <a type="button" href="{{route('ventas.delete', $venta)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @endif

    {{ $cargado == true ? $ventas->links() : null }}
</div>
