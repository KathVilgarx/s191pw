<!-- Recuerda que esto se pone tal cual para jalar la plantilla
 lo que va entre parentesis es el nombre de la plantilla -->
@extends('layouts.plantilla1')

@section('titulo', 'Componentes Blade')

@section('contenido')

    <!-- Aqui se colocan los valores que se van a mostrar -->
    <x-Card encabezado="componente 1" titulo="titulo 1" textoBoton="Guardar"> 
        Contenido de tarjeta 1
    </x-Card>
    
    <x-Card encabezado="componente 2" titulo="titulo 2" textoBoton="NO Guardar"> 
        Contenido de tarjeta 2
    </x-Card>

    <x-Alert tipo="danger">Soy un alert ROJO</x-Alert>
    <x-Alert tipo="warning">Soy un alert AMARILLO</x-Alert>

@endsection
