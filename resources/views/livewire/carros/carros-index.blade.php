<div wire:init="cargando">

    <div class="float-right mb-2">
        <a href="{{ route('carros.create') }}" type="button" class="btn-sm btn btn-success"><i
                class="fa fa-plus-circle"></i> Crear nuevo</a>

    </div>

    <div class="col-3 mb-2">
        <div class="input-group flex-nowrap">
            <span class="input-group-text"><i class="fa fa-search"></i></span>
            <input wire:model="search" type="text" class="form-control" placeholder="Buscar">
        </div>
    </div>

    @if (count($carros) > 0)
        <table class="table text-center table-striped">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th>Imagen</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Año</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Tipo de carro</th>
                    <th scope="col">Color</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($carros as $carro)
                    <tr>
                        <th scope="row">{{ $carro->id }}</th>
                        <th>
                            <img style="width: 60px; height: 50px;"
                                src="{{ Storage::disk('public')->url($carro->foto != null ? $carro->foto : 'images/carros/default.jpg') }}"
                                alt="">
                        </th>
                        <td>{{ $carro->modelo }}</td>
                        <td>{{ $carro->año }}</td>
                        <td>{{ $carro->precio }}</td>
                        <td>{{ $carro->tipocarro }}</td>
                        <td>{{ $carro->color }}</td>
                        <td>
                            <a type="button" href="{{ route('carros.show', $carro) }}" class="btn btn-info btn-sm"><i
                                    class="fa fa-eye"></i></a>
                            <a type="button" href="{{ route('carros.edit', $carro) }}"
                                class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> </a>
                            <a type="button" href="{{ route('carros.delete', $carro) }}"
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


    {{ $cargado == true ? $carros->links() : null }}
</div>
