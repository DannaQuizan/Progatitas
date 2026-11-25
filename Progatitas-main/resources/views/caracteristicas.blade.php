@extends('layouts.master')

@section('title', 'Características')

@section('styles')
<style>
    body { background-color: rgb(163, 29, 29); }
</style>
@endsection

@section('content')
<div class="container-fluid mt-4" style="max-width: 1100px; padding: 15px;">
    <div class="row align-items-center bg-white rounded shadow p-4" style="margin: 0;">

        <div class="col-md-6 text-center mb-4 mb-md-0">
            <img src="{{ asset('img/caracteristicas.jpg') }}" class="img-fluid rounded shadow-sm border" alt="Salas del MASIN" style="max-height: 400px; width: 100%; object-fit: cover;">
        </div>

        <div class="col-md-6 px-4">
            <h2 class="fw-bold mb-3" style="color: rgb(163, 29, 29);">Características del MUSA</h2>
            <p class="fs-6" style="line-height: 1.7; text-align: justify; color: #333333;">
                El Museo de Arte de Sinaloa es uno de los espacios culturales más importantes del noroeste del país. Se caracteriza por lo siguiente:
            </p>
            <ul class="fs-6" style="line-height: 1.8; color: #444444; padding-left: 20px;">
                <li><strong>Gran Acervo:</strong> Resguarda una colección de más de 400 piezas de arte moderno y contemporáneo.</li>
                <li><strong>Grandes Maestros:</strong> Alberga obras de figuras clave como Diego Rivera, Siqueiros, Orozco y Francisco Toledo.</li>
                <li><strong>Espacios Versátiles:</strong> Cuenta con salas de exhibición permanente, salas temporales y un hermoso patio central.</li>
                <li><strong>Arquitectura Histórica:</strong> El edificio es una joya colonial del siglo XIX restaurada para la difusión del arte.</li>
            </ul>
        </div>

    </div>
</div>
@endsection