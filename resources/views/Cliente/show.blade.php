<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Cliente</title>
</head>
<body>
    <h1>DETALLES DEL CLIENTE</h1>

    <p>ID: {{ $cliente->id }}</p>
    <p>Codigo: {{ $cliente->Codigo }}</p>
    <p>telefono: {{ $cliente->tfno }}</p>
    <p>numero social: {{ $cliente->num_social }}</p>
    <p>domicilio: {{ $cliente->domicilio }}</p>

    <a href="{{ route('Cliente.index') }}">Volver</a>
</body>
</html>

