@extends('app')

@section('content')
<h1>Panel de Vistas</h1>

<div class="tarjetas-container">

    {{-- Tarjeta Students --}}
    <div class="card">
        <div class="card-title">ESTUDIANTES DE API</div>
        <a href="/students" class="btn-card">Ver Api Estudiantes</a>
    </div>

    {{-- Tarjeta Alumnos --}}
    <div class="card">
        <div class="card-title">ESTUDIANTES MI PROYECTO</div>
        <a href="/alumnos" class="btn-card">Ver Alumnos</a>
    </div>

    {{-- Tarjeta Maestros --}}
    <div class="card">
        <div class="card-title">MAESTROS MI PROYECTO</div>
        <a href="/maestros" class="btn-card">Ver Maestros</a>
    </div>

    {{-- Tarjeta Vista adicional --}}
    <div class="card">
        <div class="card-title">SUMA MI PROYECTO</div>
        <a href="/suma" class="btn-card">Ver Suma</a>
    </div>

</div>
@endsection
