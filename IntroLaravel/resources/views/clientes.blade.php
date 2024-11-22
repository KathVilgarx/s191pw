@extends('layouts.plantilla1')
    @section('titulo','Clientes')

    @section('contenido')

        @if(session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: '¡Éxito!',
                text: '{{ session('success') }}',
                confirmButtonText: 'Aceptar'
            });
        </script>
        @endif

        {{-- Inicia tarjetaCliente --}}
        <div class="container mt-5 col-md-8">

        @foreach ($consultaClientes as $cliente)

        <div class="card text-justify font-monospace mt-3">

            <div class="card-header fs-5 text-primary">
                {{$cliente->nombre}} {{$cliente->apellido}}

            </div>

            <div class="card-body">
                <h5 class="fw-blod">{{$cliente->correo}}</h5>
                <h5 class="fw-medium">{{$cliente->telefono}}</h5>
                <p class="card-text fw-lighter"> </p>

            </div>

            <div class="card-footer text-muted">
                <a href="{{ route('editarcliente', $cliente->id) }}" type="submit" class="btn btn-warning btn-sm" >{{__('Actualizar')}}</a>
                <form action="{{ route('borrarcliente', $cliente->id) }}" method="POST" class="d-inline eliminar-cliente-form">
                    @csrf
                    @method('DELETE')
                    <button type="button" data-id="{{$cliente->id}}" class="btn btn-danger btn-sm btn-eliminar">{{__('Eliminar')}}</button>
                </form>
            </div>

        </div>
        {{-- Fin tarjetaCliente --}}
        @endforeach

        <script>
            document.addEventListener('DOMContentLoaded', function () {

                //boton de eliminar
                const eliminarBotones = document.querySelectorAll('.btn-eliminar');

                //alerta de si estas seguro de eliminar el dato
                eliminarBotones.forEach(boton => {
                    boton.addEventListener('click', function () {
                        const form = this.closest('form');

                        Swal.fire({
                            title: '¿Estás segura?',
                            text: "¡No podrás revertir esto!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Sí, eliminar',
                            cancelButtonText: 'Cancelar'
                        }).then((result) => {
                            //confirmación de eliminación
                            if (result.isConfirmed) {
                                form.submit();
                            }
                        });
                    });
                });
            });
        </script>

@endsection('contenido')