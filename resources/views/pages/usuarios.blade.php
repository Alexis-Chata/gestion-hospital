@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Usuarios'])
    <div class="container-fluid py-4">

        @livewire('gestionar-usuarios')
        @livewireScripts
        {{-- @include('layouts.footers.auth.footer') --}}
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    Livewire.on('reiniciar_usuario', usuario_id => {
        Swal.fire({
            title: 'Estas Seguro',
            text: "Se reiniciara la contraseña del usuario",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, !Reiniciar Contraseña!'
        }).then((result) => {
            if (result.isConfirmed) {
                Livewire.emitTo('gestionar-usuarios', 'reiniciar', usuario_id);
                Swal.fire(
                    '!Reiniciado!',
                    'Se ha reiniciado la contraseña del Usuario',
                    'success'
                )
            }
        })
    })
</script>
<script>
    Livewire.on('eliminar_usuario', usuario_id => {
        Swal.fire({
            title: 'Estas Seguro',
            text: "una vez se elimine no se podra restaurar",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, !eliminar esto!'
        }).then((result) => {
            if (result.isConfirmed) {
                Livewire.emitTo('gestionar-usuarios', 'eliminar', usuario_id);
            }
        })
    })
</script>
<script>
    livewire.on('notificar_eliminacion', accion => {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: accion,
            showConfirmButton: false,
            timer: 3000
        })
    });
</script>
<!--script-->
<script>
    livewire.on('notificar_creacion', accion => {
        document.getElementById("cerrar_usuario_modal").click();
        //notificar que el usuario se creo
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Se ' + accion + ' el usuario correctamente',
            showConfirmButton: false,
            timer: 1500
        })
    });
</script>
@endsection
