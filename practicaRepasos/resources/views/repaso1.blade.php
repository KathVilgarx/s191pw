<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertidor</title>
    @vite(['resources/js/app.js'])
    <style>
        body{
            background: linear-gradient(to right, #CC6CE7, #E7DDFF)
        }
    </style>
</head>
<body>
    <div class="d-flex flex-column justify-content-center align-items-center text-center full-height">
        <h1>Practica Repaso 1</h1>

        <x-Card 
            titulo="Convertidor de Megabites a Gigabites"
            texto="Ingresa los megabites"
            input="0 mb"
            ruta="mb_gb"
            :resultado="$resultado_mb_gb ?? ''"   
        />

        <x-Card 
            titulo="Convertidor de Gigabites a Megabites"
            texto="Ingresa los gigabites"
            input="0 gb"
            ruta="gb_mb"
            :resultado="$resultado_gb_mb ?? ''"   
        />

        <x-Card 
            titulo="Convertidor de Gigabites a Terabites"
            texto="Ingresa los gigabites"
            input="0 gb"
            ruta="gb_tb"
            :resultado="$resultado_gb_tb ?? ''"   
        />

        <x-Card 
            titulo="Convertidor de Terabites a Gigabites"
            texto="Ingresa los terabites"
            input="0 tb"
            ruta="tb_gb"
            :resultado="$resultado_tb_gb ?? ''"   
        />
    </div>
</body>
</html>
