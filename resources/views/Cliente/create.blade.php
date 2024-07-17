<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cliente</title>
</head>
<body>
    <h1>CREAR CLIENTE</h1>

    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf

        <label>
            Codigo:
            <br>
            <input type="number" name="codigo">
        </label>
        <br>
        <label>
            telefono:
            <br>
            <input type="text" name="tfno">
        </label>
        <br>
        <label>
            Numero Social:
            <br>
            <input type="text" name="num_social">
        </label>
        <br>
        <label>
            Domicilio:
            <br>
            <input type="text" name="domicilio">
        </label>
        <br>
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
