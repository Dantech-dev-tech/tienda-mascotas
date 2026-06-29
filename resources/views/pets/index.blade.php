<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Lista de Mascotas</title>
    </head>
    <body>
        <h1>Directorio de Mascotas</h1>
        @if(session('success'))
              <div style="color: green;">{{ session('success') }}</div>
        @endif
        <a href="{{ route('pets.create') }}">Registrar Nueva
            Mascota</a><br><br>

            <table border="1" cellpadding="10">
                <thead></thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Especie</th>
                        <th>Edad</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pets as $pet)
                        <tr>
                            <td>{{ $pet->id }}</td>
                            <td>{{ $pet->name }}</td>
                            <td>{{ $pet->species }}</td>
                            <td>{{ $pet->age }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Paginación -->
            <div style="margin-top: 20px;">
                {{ $pets->links() }}
            </div>
    </body>
    </html>