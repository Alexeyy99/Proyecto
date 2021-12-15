<div>
    <div class="row">
        <div>
            <div class="col-4 md mx-auto">
                <img class="img-fluid mx-auto d-block" style="width: 150px; height: 150px;"
                    src="{{ Storage::disk('public')->url('images/usuarios/profile.png') }}" alt="">
                <form wire:submit.prevent="login">
                    <div class="mb-3">
                        <label for="" class="form-label">Correo</label>
                        <input wire:model="email" placeholder="example@hotmail.com" type="email" class="form-control">
                        @error('email') <b class="text-danger">{{$message}}</b>@enderror
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Contraseña</label>
                        <input wire:model="password" placeholder="********" type="password" class="form-control">
                        @error('password') <b class="text-danger">{{$message}}</b>@enderror
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Recordame</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Iniciar sesion</button>

                    <a class="text-justify" href="{{route('users.create')}}">¿No tienes cuenta?</a>
                </form>
            </div>
        </div>
    </div>
</div>
