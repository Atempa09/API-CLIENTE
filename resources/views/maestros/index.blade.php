@extends('app')

@section('content')

<h1>Lista de maestros</h1>

<table class="tabla">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Materia</th>
        <th>Turno</th>
        <th>Email</th>
    </tr>

    @foreach($maestros as $maestro)
    <tr>
        <td>{{ $maestro->id }}</td>
        <td>{{ $maestro->nombre }}</td>
        <td>{{ $maestro->materia }}</td>
        <td>{{ $maestro->turno }}</td>
        <td>{{ $maestro->email }}</td>
    </tr>
    @endforeach
</table>

<!-- BOTÓN REGRESAR A VISTAS -->
<a href="/vistas" class="btn-azul" style="width:200px; text-align:center; display:block; margin-bottom:20px;">
    ← Regresar a Vistas
</a>

@endsection
