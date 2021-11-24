<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estudiantes</title>
</head>
<body>
    
    <h1>Listado de estudiantes</h1>
    <a href="{{ route('estudiante.create') }}">Crear estudiante</a>

    @if ($estudiantes->count())
        <table border="1">
            <thead>
                <th>Id</th>
                <th>Nombre</th>
                <th>Codigo</th>
                <th>Carrera</th>
            </thead>
            <tbody>
                @foreach ($estudiantes as $estudiante)    
                    <tr>
                        <td> <a href="{{ route('estudiante.show', $estudiante->id) }}">{{ $estudiante->id }}</a></td>
                        <td>{{ $estudiante->nombre }}</td>
                        <td>{{ $estudiante->codigo }}</td>
                        <td>{{ $estudiante->carrera }}</td>
                    </tr>   
                        
                @endforeach
            </tbody>
        </table>
    @else
        No hay estudiantes registrados
    @endif

</body>
</html>