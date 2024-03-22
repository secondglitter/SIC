<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="{{ asset("css/plantilla.css") }}">
</head>
<body>
    <header>
        <h1>Bienvenidos</h1>
        <a href="{{ route('dashboard') }}"><button class="dash" type="button">Regresar a dashboard</button></a>
    </header>
    <main class="center">
        @yield('contenido')
    </main>
    <footer>Todos los derechos reservados</footer>
</body>
</html>