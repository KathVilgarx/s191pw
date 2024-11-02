@extends('layouts.nav')
    @section('titulo','Registro de Libros')
    @section('contenido')

    <div class="d-flex flex-column justify-content-center align-items-center text-center full-height"
    style="min-height: 100vh; background-image: url('img/image.png'); background-size: cover; background-position: center;">
        <div class="card" style="width: 40rem; margin-top: 10rem;">
        <!-- <img src="..." class="card-img-top" alt="..."> -->
        <div class="card-body">
            <h5 class="card-title">Festival de Tradiciones de Vida y Muerte en Xcaret</h5>
            <p class="card-text">
                En el marco del Día de Muertos, el parque Xcaret en México celebró un homenaje 
                a Querétaro mediante una “calaverita literaria” escrita por la autora Alejandra 
                Flores. Este acto forma parte de un esfuerzo anual para difundir las 
                tradiciones mexicanas y celebrar la riqueza cultural del país
            </p>
        </div>
        </div>

        <div class="container">
            <a href="{{route('rutaregistro')}}" type="button" class="btn btn-dark">Registrar un Libro</a>
        </div>

    </div>
@endsection('contenido')
