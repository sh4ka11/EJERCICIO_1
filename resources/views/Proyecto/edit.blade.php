<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Proyecto</title>
</head>
<body>
    <h1>EDITAR PROYECTO</h1>

    <form action="{{ route('Proyecto.update', $proyecto->id) }}" method="POST">
        @csrf
        @method('put')

        <label>
            Codigo:
            <br>
            <input type="number" name="codigo" value="{{ old('codigo', $proyecto->codigo) }}">
        </label>
        <br>
        <label>
            Descripcion:
            <br>
            <input type="text" name="descripcion" value="{{ old('descripcion', $proyecto->descripcion) }}">
        </label>
        <br>
        <label>
            Fecha Inicio:
            <br>
            <input type="date" name="fecha_inicio" value="{{ old('fecha_inicio', $proyecto->fecha_inicio) }}">
        </label>
        <br>
        <label>
            Fecha fin:
            <br>
            <input type="date" name="fecha_fin" value="{{ old('fecha_fin', $proyecto->fecha_fin) }}">
        </label>
        <br>
        <label>
            Cuantia:
            <br>
            <input type="text" name= "cuantia" value="{{ old('cuantia', $proyecto->cuantia) }}">
        </label>
        <br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
