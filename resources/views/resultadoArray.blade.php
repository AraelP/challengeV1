<h2>Array Generado:</h2>
<ul>
    @foreach($a as $elemento)
        <li>{{ $elemento }}</li>
    @endforeach
</ul>

<h2>Elementos duplicados:</h2>
@foreach($resultado as $elemento)
    <p>{{ $elemento }}</p>
@endforeach