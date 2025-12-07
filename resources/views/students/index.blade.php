@extends('app')

@section('content')

<h1>Panel de Tarjetas</h1>

{{-- TARJETAS SUPERIORES --}}
<div class="tarjetas-container">

    <div class="card">
        <div class="card-title">TODAS LAS VISTAS</div>
        <a href="/vistas" class="btn-card">Ver Todas Las Vistas</a>
    </div>

</div>

<br><br>

<h1>Lista de Estudiantes</h1>

<a href="{{ route('students.create') }}" class="btn-azul" style="width:200px; text-align:center;">
    Crear estudiante
</a>

<br><br>

{{-- TABLA DE ESTUDIANTES --}}
<table class="tabla">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Teléfono</th>
        <th>Lenguaje</th>
        <th>Acciones</th>
    </tr>

    @foreach($students as $student)
        <tr>
            <td>{{ $student['id'] }}</td>
            <td>{{ $student['name'] }}</td>
            <td>{{ $student['email'] }}</td>
            <td>{{ $student['phone'] }}</td>
            <td>{{ $student['language'] }}</td>

            <td class="acciones">

                <a href="{{ route('students.edit', $student['id']) }}" class="btn-azul">
                    Editar
                </a>

                <a href="#" class="btn-rojo"
                   onclick="event.preventDefault(); 
                        if(confirm('¿Seguro de eliminar este alumno?')) {
                            document.getElementById('delete-{{ $student['id'] }}').submit();
                        }">
                   Eliminar
                </a>

                <form id="delete-{{ $student['id'] }}"
                      action="{{ route('students.destroy', $student['id']) }}"
                      method="POST"
                      style="display:none;">
                    @csrf
                    @method('DELETE')
                </form>

            </td>
        </tr>
    @endforeach

</table>

@endsection
