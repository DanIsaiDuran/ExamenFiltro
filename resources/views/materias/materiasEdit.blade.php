<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar materia</title>
</head>
<body>
    <h1>Editar materia</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('materia.update', $materia) }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="nombre">Nombre</label>
        <br>
        <input type="text" name="nombre" value="{{ $materia->nombre }}">
        <br>
        <label for="creditos">Creditos</label>
        <br>
        <input type="text" name="creditos" value="{{ $materia->creditos }}">
        <br>
        <label for="profesor">Profesor</label>
        <br>
        <input type="text" name="profesor" value="{{ $materia->profesor }}">
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