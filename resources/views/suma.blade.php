@extends('layouts.app')

@section('title', 'Ejercicio de Suma')

@section('content')

    <h1>EJERCICIO DE UNA SUMA</h1>
    <h2>SUMA DE 2 NUMEROS</h2>

    <!-- FORMULARIO DE SUMA -->
    <form action="/suma" method="POST" class="espaciado">
        @csrf

        <label for="num1">NUMERO 1:</label>
        <input type="number" name="num1" id="num1" required>

        <label for="num2">NUMERO 2:</label>
        <input type="number" name="num2" id="num2" required>

        <button type="submit">SUMAR</button>
    </form>

    @if (isset($res))
        <h3 class="resultado">EL RESULTADO DE LA SUMA ES: {{ $res }}</h3>
    @endif

    <form action="/suma" method="POST" class="espaciado">
        <!-- BOTÓN DE NAVEGACIÓN A OTRA VISTA -->
        <div class="espaciado" style="text-align:center;">
        <h3>¿QUIERES VER LAS OTRAS VISTAS REALIZADAS ANTERIORMENTE?</h3>

        <a href="inicio">
            <button type="button">HAZ CLICK AQUI!!!!</button>
        </a>
        </div>
    </form>

    <!-- BOTÓN REGRESAR A VISTAS -->
<a href="/vistas" class="btn-azul" style="width:200px; text-align:center; display:block; margin-bottom:20px;">
    ← Regresar a Vistas
</a>

@endsection