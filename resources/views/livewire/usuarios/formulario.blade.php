<div class="row">
    <div class="col-4">

        <div class="d-flex justify-content-center">
            <div wire:loading wire:target="foto" class="spinner-border" role="status">
                <span class="visually-hidden"></span>
            </div>
        </div>

        @if ($foto != null)
            <img class="mx-auto d-block " style="width: 290px; height: 250px;" src="{{ $foto->temporaryUrl() }}" alt="">

        @else
            <img class="mx-auto d-block " style="width: 290px; height: 250px;"
             src="{{ Storage::disk('public')->url($usuario->foto != null ? $usuario->foto : 'images/usuarios/noimage.jpg') }} "alt="">

        @endif

        <br>
        <form>
            <div class="form-group">
                <label for="">Seleccionar archivo</label>
                <input wire:model="foto" class="form-control form-control-sm" id="formFileSm" type="file">
                @error('foto') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </form>
    </div>

    <div class="col-6 mx-auto">
        <div class="form-group mb-5">
            <label>Nombre</label>
            <input wire:model.defer="usuario.nombre" type="text" class="form-control" id="model">
            @error('usuario.nombre') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group mb-5">
            <label>Email</label>
            <input wire:model.defer="usuario.email" type="text" class="form-control" id="year">
            @error('usuario.email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group mb-5">
            <label>Password</label>
            <input wire:model="usuario.password" type="password" class="form-control" id="price">
            @error('usuario.password') <span class="text-danger">{{ $message }}</span> @enderror
            <span></span>
        </div>

    </div>
</div>
