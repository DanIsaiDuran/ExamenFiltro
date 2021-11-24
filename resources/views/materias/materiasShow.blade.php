<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $materia->nombre }}</title>
</head>
<body>
    <h1>Información de la materia {{ $materia->nombre }}</h1>
    <a href="{{ route('materia.index') }}">Regresar</a>

    <ul>
        <li>{{ $materia->creditos }}</li>
        <li>{{ $materia->profesor }}</li>
        <li>{{ $materia->turno }}</li>
        <li>
            @if ($materia->disponible)
                Disponible
            @else
                No disponible
             @endif
        </li>
    </ul>

    <br>
    <a href="{{ route('materia.edit', $materia) }}">Editar</a>

    <form action="{{ route('materia.destroy', $materia) }}" method="POST">
        @csrf
        @method('DELETE')

        <input type="submit" value="Eliminar">
    
    </form>
</body>
</html>