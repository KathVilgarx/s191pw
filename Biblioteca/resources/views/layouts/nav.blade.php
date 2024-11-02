<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])

    <title>@yield('titulo')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('rutainicio')}}" style="color: white;">Biblioteca de Kath</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('rutainicio')}}" style="color: white;">Inicio</a>
            </li>

            <li class="nav-item">
            <a class="nav-link active" href="{{route('rutaregistro')}}" style="color: white;">Registro de Libros</a>
            </li>
            
        </ul>
        </div>
    </div>
    </nav>

    @yield('contenido')
    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <p>&copy; 31|10|2024 La Biblioteca de Kath. Todos los derechos reservados.</p>
        <a href="#" class="text-white">Términos y condiciones</a> |
        <a href="#" class="text-white">Política de privacidad</a>
    </footer>
</body>
</html>