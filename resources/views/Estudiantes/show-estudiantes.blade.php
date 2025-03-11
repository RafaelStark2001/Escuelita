<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if(session('success'))
    <p style="color: green; font-weight: bold;">{{ session('success') }}</p>
    @endif

    <h1>Estudiante # {{$estudiante->id}}</h1>
    <ul>
        <li>Nombre: {{$estudiante->nombre}}</li>
        <li>Correo: {{$estudiante->correo}}</li>
        <li>Fecha de Nacimiento: {{$estudiante->fecha_nacimiento }}</li>
        <li>Ciudad: {{$estudiante->ciudad}}</li>
    </ul>

    <a href="{{ route('estudiantes.edit', $estudiante) }}">Editar Informacion de Estudiante</a>
    <br>
    <a href="{{ route('estudiantes.index', $estudiante) }}">Ver Tabla de Estudiantes</a>

</body>
</html>
