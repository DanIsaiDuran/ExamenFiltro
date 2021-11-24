<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $estudiante->nombre }}</title>
</head>
<body>
    <h1>Información de {{ $estudiante->nombre }}</h1>
    <a href="{{ route('estudiante.index') }}">Regresar</a>

    <ul>
        <li>{{ $estudiante->codigo }}</li>
        <li>{{ $estudiante->carrera }}</li>
        <li>{{ $estudiante->creditos_cursados }}</li>
        <li>{{ $estudiante->correo }}</li>
    </ul>

    <br>
    <a href="{{ route('estudiante.edit', $estudiante) }}">Editar</a>

    <form action="{{ route('estudiante.destroy', $estudiante) }}" method="POST">
        @csrf
        @method('DELETE')

        <input type="submit" value="Eliminar">
    
    </form>
    <a href="{{ route('pivote.agregarMateria', $estudiante) }}">Agregar materia</a>
</body>
</html>