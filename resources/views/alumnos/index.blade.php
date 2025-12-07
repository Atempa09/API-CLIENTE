@extends('app')

@section('content')

<h1>Lista de alumnos</h1>

<table class="tabla">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Retroalimentacion</th>
        <th>Calificacion</th>
        <th>Escuela</th>
        <th>Email</th>
    </tr>

    @foreach($alumnos as $alumno)
    <tr>
        <td>{{ $alumno->id }}</td>
        <td>{{ $alumno->nombre }}</td>
        <td>{{ $alumno->retroalimentacion }}</td>
        <td>{{ $alumno->calificacion }}</td>
        <td>{{ $alumno->escuela }}</td>
        <td>{{ $alumno->email }}</td>
    </tr>
    @endforeach
</table>

<!-- BOTÓN REGRESAR A VISTAS -->
<a href="/vistas" class="btn-azul" style="width:200px; text-align:center; display:block; margin-bottom:20px;">
    ← Regresar a Vistas
</a>

@endsection
