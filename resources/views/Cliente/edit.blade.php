<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Cliente</title>
</head>
<body>
    <h1>EDITAR CLIENTE</h1>

    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @csrf
        @method('put')

        <label>
            Codigo:
            <br>
            <input type="number" name="codigo" value="{{ old('codigo', $cliente->codigo) }}">
        </label>
        <br>
        <label>
            Telefono:
            <br>
            <input type="text" name="tfno" value="{{ old('tfno', $cliente->tfno) }}">
        </label>
        <br>
        <label>
            Numero social:
            <br>
            <input type="text" name="num_social" value="{{ old('num_social', $cliente->num_social) }}">
        </label>
        <br>
        <label>
            Domicilio:
            <br>
            <input type="text" name="domicilio" value="{{ old('domicilio', $cliente->domicilio) }}">
        </label>
        <br>
        <br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
