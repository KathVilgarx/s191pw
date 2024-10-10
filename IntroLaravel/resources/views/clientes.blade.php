@extends('layouts.plantilla1')
    @section('titulo','Clientes')

    @section('contenido')
        {{-- Inicia tarjetaCliente --}}
        <div class="container mt-5 col-md-8">

        <div class="card text-justify font-monospace">

            <div class="card-header fs-5 text-primary">
                Ian Alfonso Serrano Gonzalez

            </div>

            <div class="card-body">
                <h5 class="fw-blod">alfonsoserrago@gmail.com</h5>
                <h5 class="fw-medium">4427957997</h5>
                <p class="card-text fw-lighter"> </p>

            </div>

            <div class="card-footer text-muted">
                <button type="submit" class="btn btn-warning btn-sm">Actualizar</button>
                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>

            </div>

        </div>
        {{-- Fin tarjetaCliente --}}
@endsection('contenido')