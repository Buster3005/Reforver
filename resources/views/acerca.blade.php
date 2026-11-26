<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de</title>
    <link rel="icon" href="{{ asset('css/Bustericono.png') }}" type="image/png">
</head>
<body id="inicio">
     @extends('layouts.app')

@section('titulo', 'Catálogo - REFORVER')

@section('contenido')
<h1 style="color: #ffffff; text-align: center;">Acerca de</h1>
<br><br>
<div class="tarjetas">
    <div class="texto-tarjeta">
        <h2>REFORVER</h2>
        <p>REFORVER es un proyecto desarrollado por:
            <br><br>
            <strong>Alumno:</strong>Franncisco Javier Islas Escalona
            <br><br>
             <strong>Grupo:</strong>3°B PRVC
            <br><br>
            <strong>Versión:</strong>2.0
            <br><br>
            <strong>Fecha de creación:</strong>©2026
            <br><br>
            <strong>Institución:</strong>Centro de Bachillerato Tecnológico Agropecuario No. 35 "Leona Vicario"
            <br><br>
            <strong>Califica:</strong>Prof. Mariano Sanchéz Reyes
        </p>
    </div>
    <div class="imagen-tarjeta">
        <img src="{{ asset('css/Bustericono.png') }}" alt="Acerca de REFORVER">
    </div>
@endsection
</body>
</html>