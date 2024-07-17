<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Proyecto</title>
</head>
<body>
    <h1>PROYECTO</h1>

    <form action="{{ route('Proyecto.store') }}" method="POST">
        @csrf

        <label>
            Codigo:
            <br>
            <input type="number" name="codigo">
        </label>
        <br>
        <label>
            Descripcion:
            <br>
            <input type="text" name="descripcion">
        </label>
        <br>
        <label>
            Fecha inicio:
            <br>
            <input type="date" name="fecha_inicio">
        </label>
        <br>
        <label>
            Fecha fin:
            <br>
            <input type="date" name="fecha_fin">
        </label>
        <br>
         cuantia:
        <br>
        <input type="number" name="cuantia">
    </label>
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>