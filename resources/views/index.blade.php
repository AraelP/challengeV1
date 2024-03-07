<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"/>
    <title>CSV Challenge</title>
</head>
<body>
    <header>
        <nav>
        </nav>
        <form method="post" action="{{ route('import')}}" enctype="multipart/form-data">
            <h2 style="text-align: center">IMPORTAR CSV EMPLEADOS</h2>
            @csrf
            <input type="file" name="documento_csv">
            <input type="submit" value="importar_csv">
        </form>
    </header>
    <main>
        @forelse ($empleados as $empleado)
    <article>
        <header>
            <p>Empleado: {{ $empleado->nombre }} {{ $empleado->apellido }}</p>
        </header>
        <p>Fecha de Nacimiento: {{ $empleado->fecha_nacimiento }}</p>
        <p>Hora de Entrada: {{ $empleado->hora_entrada }}</p>
        <p>Hora de Salida: {{ $empleado->hora_salida }}</p>
    </article>
@empty
    <p>No hay datos de empleados</p>
@endforelse
    </main>
</body>
</html>