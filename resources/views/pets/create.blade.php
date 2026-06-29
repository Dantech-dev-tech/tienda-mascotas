<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Nueva Mascota</title>
    </head>
    <body>
        <h1>Crear Nueva Mascota</h1>

        <form action="{{ route('pets.store') }}" method="POST">
            @csrf
            <div>
                <label>Nombre:</label>
                <input type="text" name="name" required>
            </div><br>
            <div>
                <label>Especie (Ej. Perro, Gato):</label>
                <input type="text" name="species" required>
            </div><br>
            <div>
                <label>Edad (años):</label>
                <input type="number" name="age" required>
            </div><br>
            <button type="submit">Guardar Mascota</button>
        </form>
        <br>
        <a href="{{ route('pets.index') }}">Volver a la lista</a>
    </body>
</html>
