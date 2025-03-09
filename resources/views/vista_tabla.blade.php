<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Estudiantes</title>
</head>
<body>
    <h2>Lista de Estudiantes</h2>

    @if(session('success'))
    <p style="color: green; font-weight: bold;">{{ session('success') }}</p>
    @endif

    @if($estudiantes->isEmpty())
        <p>No hay estudiantes registrados.</p>
    @else
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Fecha de Nacimiento</th>
                <th>Ciudad</th>
            </tr>
            @foreach ($estudiantes as $estudiante)
            <tr>
                <td>{{ $estudiante->id }}</td>
                <td>{{ $estudiante->nombre }}</td>
                <td>{{ $estudiante->correo }}</td>
                <td>{{ $estudiante->fecha_nacimiento }}</td>
                <td>{{ $estudiante->ciudad }}</td>
            </tr>
            @endforeach
        </table>
    @endif

    <a href="{{ route('estudiantes.create') }}">Agregar Nuevo Estudiante</a>


</body>
</html>
