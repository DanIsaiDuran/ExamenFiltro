<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear materia</title>
</head>
<body>
    <h1>Crear materia</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('materia.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre</label>
        <br>
        <input type="text" name="nombre">
        <br>
        <label for="creditos">Creditos</label>
        <br>
        <input type="text" name="creditos">
        <br>
        <label for="profesor">Profesor</label>
        <br>
        <input type="text" name="profesor">
        <br>
        <label for="turno">Turno</label>
        <br>
        <select name="turno">
            <option value="matutino">Matutino</option>
            <option value="vespertino">Vespertino</option>
        </select>
        <br>
        <label for="disponible">Disponible</label>
        <br>
        <input type="radio" name="disponible" value="1">Si
        <input type="radio" name="disponible" value="0">No
        <br>
        <input type="submit" value="enviar">

    </form>
</body>
</html>