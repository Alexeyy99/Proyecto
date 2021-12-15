<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Proyecto</title>

    @livewireStyles
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            @if (Auth::check('web'))
                {{-- <a class="text-primary navbar-brand" href="#"><img
                        style="border-radius: 25px; width: 40px; height: 40px;"
                        src="{{ Storage::disk('public')->url(Auth::user()->foto ? Auth::user()->foto : 'images/usuarios/noimage.png') }}"
                        alt=""> {{ Auth::user()->nombre }}</a> --}}
                <button class="navbar-toggler" type="button" data-as-toggle="collapse"
                    data-bs-target="#navbarSupportContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"></button>
            @endif
            <div class="collapse navbar-collapse">
                <ul class="mb-2 navbar-nav mb-lg-0 me-auto">

                    @if (Auth::check('web'))
                        <li class="nav-item mb-2">
                            <a class="text-white nav-link active" href="{{ route('carros.index') }}"
                                aria-current="page"><i class="fa fa-car" aria-hidden="true"></i>
                                Carros
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="text-white nav-link active" href="{{ route('users.index') }}"
                                aria-current="page"> <i class="fa fa-users" aria-hidden="true"></i>
                                Usuarios
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="text-white nav-link active" href="{{ route('ventas.index') }}"
                                aria-current="page"> <i class="fa fa-money-check-alt"></i></i>
                                Ventas
                            </a>
                        </li>

                        <div style="margin-left: 1050px;">
                            @livewire('login.logout');
                        </div>


                    @endif

                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        {{ $slot }}
    </div>

    @livewireScripts

    <script>
        livewire.on('alert-login', mensaje => {
            Swal.fire({
                icon: 'error',
                title: 'Ocuriro un error.',
                text: mensaje,
            })
        })

        livewire.on('alert-user-create', mensaje => {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: mensaje,
                showConfirmButton: false,
                timer: 3000
            })
        })

        livewire.on('alert-user-delete', mensaje => {
            Swal.fire({
                position: 'top',
                icon: 'success',
                title: mensaje,
                showConfirmButton: false,
                timer: 3000
            })
        })

        livewire.on('alert-user-edit', mensaje => {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: mensaje,
                showConfirmButton: false,
                timer: 3000
            })
        })

        livewire.on('alert-venta', mensaje => {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: mensaje,
                showConfirmButton: false,
                timer: 3000
            })
        })
        livewire.on('alert-venta-edit', mensaje => {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: mensaje,
                showConfirmButton: false,
                timer: 3000
            })
        })

        livewire.on('alerta-carro-create', mensaje => {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: mensaje,
                showConfirmButton: false,
                timer: 3000
            })
        })
    </script>

</body>

</html>
