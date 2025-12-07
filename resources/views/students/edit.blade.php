@extends('app')

@section('content')
<h1>Editar estudiante</h1>

<form method="POST" action="{{ route('students.update', $student['id']) }}">
    @csrf
    @method('PUT')

    <label>Nombre:</label>
    <input type="text" name="name" value="{{ $student['name'] }}" required>

    <label>Email:</label>
    <input type="email" name="email" value="{{ $student['email'] }}" required>

    <label>Teléfono:</label>
    <input type="text" name="phone" value="{{ $student['phone'] }}" required>

    <label>Lenguaje:</label>
    <input type="text" name="language" value="{{ $student['language'] }}" required>

    <button type="submit">Actualizar</button>
</form>

<br>

<a href="{{ route('students.index') }}" class="btn-azul" style="width:200px; text-align:center;">Volver</a>
@endsection
