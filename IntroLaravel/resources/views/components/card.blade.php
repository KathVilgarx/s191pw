<div class="container mt-4">

<div class="card">

    <div class="card-header">
    {{$encabezado}}
    </div>

    <div class="card-body">
    <h5 class="card-title">{{$titulo}}</h5>
    <p class="card-text">{{$slot}}</p>
    <a href="#" class="btn btn-primary">{{$textoBoton}}</a>
    </div>

    </div>

    <!-- El encabezado, el titulo y el slot se colocan con ecos
     lo que se coloca ahi que se va a mostrar esta en la vista del 
     componente -->