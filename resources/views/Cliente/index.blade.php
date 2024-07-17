<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
</head>
<body>
    <h1>CLIENTES</h1>

    <a href="{{ route('Cliente.create') }}">Nuevo Cliente</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Codigo</th>
                <th>Telefono</th>
                <th>numero social</th>
                <th>domicilio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->id }}</td>
                    <td>{{ $cliente->codigo }}</td>
                    <td>{{ $cliente->tfno }}</td>
                    <td>{{ $cliente->num_social }}</td>
                    <td>{{ $cliente->domicilio }}</td>
                    <td>
                        <a href="{{ route('clientes.show', $cliente->id) }}">Mostrar</a>
                        <a href="{{ route('clientes.edit', $cliente->id) }}">Editar</a>
                        <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
