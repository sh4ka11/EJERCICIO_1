<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Cliente</title>
</head>
<body>
    <h1>DETALLES DEL CLIENTE</h1>

    <p>ID: {{ $proyecto->id }}</p>
    <p>Codigo: {{ $proyecto->Codigo }}</p>
    <p>Descripcion: {{ $proyecto->descripcion }}</p>
    <p>Fecha inicio: {{ $proyecto->fecha_inicio }}</p>
    <p>fecha fin: {{ $proyecto->fecha_fin }}</p>
    <p>Cuantia: {{ $proyecto->cuantia }}</p>

    <a href="{{ route('Proyecto.index') }}">Volver</a>
</body>
</html>