<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asistencia</title>
</head>
<body>
    <h1>Asistencia de Empleado</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha de Nacimiento</th>
                <th>Hora de Entrada</th>
                <th>Hora de Salida</th>
                <th>Total de Horas Trabajadas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($asistencia as $item)
                <tr>
                    <td>{{ $item->nombre }}</td>
                    <td>{{ $item->apellido }}</td>
                    <td>{{ $item->fecha_nacimiento }}</td>
                    <td>{{ $item->hora_entrada }}</td>
                    <td>{{ $item->hora_salida }}</td>
                    <td>{{ $item->total_horas }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>