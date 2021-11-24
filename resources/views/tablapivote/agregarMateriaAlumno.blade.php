<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar materia</title>
</head>
<body>
    <h1>Agregar materias a {{ $estudiante->nombre }}</h1>
    <h2>Listado de materias</h2>
    <ul>
        @foreach ($materias as $materia)
            <li>{{ $materia->nombre }} - {{ $materia->id }}</li>
        @endforeach
    </ul>
    

    <form action="{{ route('pivote.agregarMateria', $estudiante)}}" method="POST">
        @csrf
        <label for="materia">Agrega una materia por su id</label>
        <br>
        <input type="text" name="id">

        <input type="submit" value="Enviar">
        
    </form>
</body>
</html>