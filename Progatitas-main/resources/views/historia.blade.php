@extends('layouts.master')

@section('title', 'Historia')

@section('styles')
<style>
    body {
       background-image: url('{{ asset('img/papelbelicon.jpg') }}');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        min-height: 100vh;
    }
</style>
@endsection

@section('content')
<div class="container mx-auto mt-5 px-3" style="max-width: 800px;">
    <div class="p-4 rounded shadow text-center" style="background-color: rgb(202, 152, 58); color: white;">
        <h3 class="fw-bold mb-3">Historia del MASIN</h3>
        <p class="mb-4 text-start" style="font-size: 15px; line-height: 1.6; text-align: justify !important;">
            El edificio del Museo de Arte de Sinaloa es uno de los inmuebles más antiguos de Culiacán, construido originalmente en 1837. A lo largo del tiempo funcionó como casa obispal, Palacio Municipal y sede de los Poderes del Estado. Fue restaurado por completo a finales de 1990 para convertirse en museo, abriendo sus puertas oficialmente el 21 de noviembre de 1991 para resguardar el patrimonio artístico de nuestra región.
        </p>

        <!-- Recuadro de la imagen centrado abajo del texto -->
        <div class="mx-auto" style="max-width: 450px;">
            <img src="{{ asset('img/historia.jpg') }}" class="img-fluid rounded border border-light p-1 shadow-sm" alt="Fachada Histórica MASIN" style="max-height: 260px; width: 100%; object-fit: cover;">
        </div>
    </div>
</div>
@endsection
