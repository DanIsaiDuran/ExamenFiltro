<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Materias</title>
</head>
<body>
    
    <h1>Listado de materias</h1>
    <a href="{{ route('materia.create') }}">Crear materia</a>
    <br>

    @if ($materias->count())
        <table border="1">
            <thead>
                <th>Id</th>
                <th>Nombre</th>
                <th>Profesor</th>
                <th>Disponible</th>
            </thead>
            <tbody>
                @foreach ($materias as $materia)    
                    <tr>
                        <td> <a href="{{ route('materia.show', $materia->id) }}">{{ $materia->id }}</a></td>
                        <td>{{ $materia->nombre }}</td>
                        <td>{{ $materia->profesor }}</td>
                        <td>
                            @if ($materia->disponible)
                                Disponible
                            @else
                                No disponible
                            @endif
                        </td>
                    </tr>   
                        
                @endforeach
            </tbody>
        </table>
    @else
        No hay materias registradas
    @endif

</body>
</html>