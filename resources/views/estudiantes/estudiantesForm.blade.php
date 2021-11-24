<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear estudiante</title>
</head>
<body>
    <h1>Crear estudiante</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('estudiante.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre</label>
        <br>
        <input type="text" name="nombre">
        <br>
        <label for="codigo">Codigo</label>
        <br>
        <input type="text" name="codigo">
        <br>
        <label for="carrera">Carrera</label>
        <br>
        <input type="text" name="carrera">
        <br>
        <label for="creditos">Creditos</label>
        <br>
        <input type="text" name="creditos">
        <br>
        <label for="correo">Correo</label>
        <br>
        <input type="email" name="correo">
        <br>
        <input type="submit" value="enviar">

    </form>
</body>
</html>