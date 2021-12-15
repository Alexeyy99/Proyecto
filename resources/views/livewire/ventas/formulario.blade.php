<div class="row">
    <div class="col-5">
        <form>
            <div class="form-group">
                <label for="">Usuario que adquiere el curso:</label>
                <select wire:model="venta.id_usuario" class="form-control">
                    @foreach ($usuarios as $usuario)
                        <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Carro</label>
                <select wire:model="venta.id_carro" class="form-control">
                    @foreach ($carros as $carro)
                        <option value="{{ $carro->id }}">{{ $carro->modelo }}</option>
                    @endforeach
                </select>
            </div>
        </form>
    </div>
</div>
