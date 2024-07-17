<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Proyectos</title>
</head>
<body>
    <h1>PROYECTOS</h1>

    <a href="{{ route('Proyecto.create') }}">Nuevo Proyecto</a>

    <table>
        <thead>
            <tr>
                <th>codigo</th>
                <th>Descripcion</th>
                <th>fecha inicio</th>
                <th>fecha fin</th>
                <th>cuantia</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proyecto as $proyecto)
                <tr>
                    <td>{{ $proyecto->id }}</td>
                    <td>{{ $proyecto->codigo }}</td>
                    <td>{{ $proyecto->fecha_inicio }}</td>
                    <td>{{ $proyecto->fecha_fin }}</td>
                    <td>{{ $proyecto->cuantia }}</td>
                    <td>
                        <a href="{{ route('Proyecto.show', $proyecto->id) }}">Mostrar</a>
                        <a href="{{ route('Proyecto.edit', $proyecto->id) }}">Editar</a>
                        <form action="{{ route('Proyecto.destroy', $proyecto->id) }}" method="POST" style="display:inline;">
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
