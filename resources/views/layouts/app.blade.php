<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistema de Mascotas')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="header">
        <h1>Sistema de Mascotas</h1>
        <nav>
            <a href="{{ route('pets.index') }}">Listado</a>
            <a href="{{ route('pets.create') }}">Nueva Mascota</a>
        </nav>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer class="footer">
        Programación III - Laravel 13
    </footer>
</body>
</html>