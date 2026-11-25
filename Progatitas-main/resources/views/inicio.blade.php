@extends('layouts.master')

@section('title', 'Inicio')

@section('content')
  <div class="position-absolute top-50 start-50 translate-middle w-100 px-3" style="z-index: 10; max-width: 550px;">
    <div class="p-4 text-center rounded shadow" style="background-color: rgb(163, 29, 29); color: white;">
      <h3 class="fw-bold mb-3">¿Qué es el MASIN?</h3>
      <p class="mb-0 text-start" style="font-size: 15px; line-height: 1.6; text-align: justify !important;">
        El MASIN es un museo dedicado a la preservación y difusión del arte en Sinaloa. Albergado en un hermoso edificio del siglo XIX en el centro de Culiacán, es un espacio cultural clave que resguarda obras históricas y contemporáneas de grandes maestros de la plástica mexicana.
      </p>
    </div>
  </div>

  <h1 class="text-center" style="color: brown; font-family: 'Trebuchet MS';">MASIN</h1>
  <img src="{{ asset('img/maisin.jpg') }}" class="rounded mx-auto d-block" alt="Fachada del MASIN">
@endsection