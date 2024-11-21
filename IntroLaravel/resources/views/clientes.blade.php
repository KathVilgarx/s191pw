@extends('layouts.plantilla1')
    @section('titulo','Clientes')

    @section('contenido')
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
                    <button type="submit" data-id="{{$cliente->id}}" class="btn btn-danger btn-sm">{{__('Eliminar')}}</button>
                </form>
            </div>

        </div>
        {{-- Fin tarjetaCliente --}}
        @endforeach

@endsection('contenido')