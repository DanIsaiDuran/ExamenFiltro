<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
</head>
<body>
    <h1>Editar información de {{ $estudiante->nombre }}</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('estudiante.update', $estudiante) }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="nombre">Nombre</label>
        <br>
        <input type="text" name="nombre" value="{{ $estudiante->nombre }}">
        <br>
        <label for="codigo">Codigo</label>
        <br>
        <input type="text" name="codigo" value="{{ $estudiante->codigo }}">
        <br>
        <label for="carrera">Carrera</label>
        <br>
        <input type="text" name="carrera" value="{{ $estudiante->carrera }}">
        <br>
        <label for="creditos">Creditos</label>
        <br>
        <input type="text" name="creditos" value="{{ $estudiante->creditos_cursados }}">
        <br>
        <label for="correo">Correo</label>
        <br>
        <input type="email" name="correo" value="{{ $estudiante->correo}}">
        <br>
        <input type="submit" value="enviar">

    </form>
</body>
</html>