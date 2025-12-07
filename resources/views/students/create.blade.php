@extends('app')

@section('content')
<h1>Crear estudiante</h1>

<form method="POST" action="{{ route('students.store') }}">
    @csrf

    <label>Nombre:</label>
    <input type="text" name="name" required>

    <label>Email:</label>
    <input type="email" name="email" required>

    <label>Teléfono:</label>
    <input type="text" name="phone" required>

    <label>Lenguaje:</label>
    <input type="text" name="language" required>

    <button type="submit">Guardar</button>
</form>

<br>

<a href="{{ route('students.index') }}" class="btn-azul" style="width:200px; text-align:center;">Volver</a>
@endsection
