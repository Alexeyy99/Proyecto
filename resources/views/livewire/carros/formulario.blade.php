<div class="row">
    <div class="col-4">

        <div class="d-flex justify-content-center">
            <div wire:loading wire:target="foto" class="spinner-border" role="status">
                <span class="visually-hidden"></span>
            </div>
        </div>

        @if ($foto != null)
            <img class="mx-auto d-block " style="width: 250px; height: 250px;" src="{{ $foto->temporaryUrl() }}" alt="">

        @else
        <img class="mx-auto d-block " style="width: 250px; height: 250px;"
        src="{{ Storage::disk('public')->url($carro->foto != null ? $carro->foto : 'images/carros/default.jpg') }} "alt="">

        @endif

        <form>
            <div class="form-group">
                <label for="">Seleccionar archivo</label>
                <input wire:model="foto" class="form-control form-control-sm" id="formFileSm" type="file">
                @error('foto') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </form>
    </div>

    <div class="col-6 mx-auto">
        <div class="form-group">
            <label>Modelo</label>
            <input wire:model.defer="carro.modelo" type="text" class="form-control" id="model">
            @error('carro.modelo') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Año</label>
            <input wire:model.defer="carro.año" type="text" class="form-control" id="year">
            @error('carro.año') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Precio</label>
            <input wire:model="carro.precio" type="text" class="form-control" id="price">
            @error('carro.precio') <span class="text-danger">{{ $message }}</span> @enderror
            <span></span>
        </div>

        <div class="form-group">
            <label>Tipo de carro</label>
            <input wire:model.defer="carro.tipocarro" type="text" class="form-control" id="tipocarro">
            @error('carro.tipocarro') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Color</label>
            <input wire:model.defer="carro.color" type="text" class="form-control" id="color">
            @error('carro.color') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label>Cilindros</label>
            <input wire:model.defer="carro.cilindros" type="text" class="form-control" id="cilindros">
        </div>


    </div>
</div>
