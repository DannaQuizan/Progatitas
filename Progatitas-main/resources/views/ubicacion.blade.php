@extends('layouts.master')

@section('title', 'Ubicación')

@section('content')
<div class="container-md mt-5" style="background-color: rgb(248, 208, 121);">
    <h1 class="text-center mt-5">¡Visítanos!</h1>
</div>

<div class="container-md mt-5 mx-auto">
    <div class="row g-4 align-items-stretch">

        <div class="col-md-6 p-4 rounded" style="background-color: brown;">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3621.5541452285984!2d-107.3968167243374!3d24.810716177961822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86bcd0a8dd94d885%3A0x15dce580f4ae299a!2sMuseo%20de%20Arte%20de%20Sinaloa!5e0!3m2!1ses!2smx!4v1790215458960!5m2!1ses!2smx"
                style="width: 100%; height: 100%; min-height: 350px; border: 0; border-radius: 8px;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

        <div class="col-md-6 p-4 rounded text-white" style="background-color: brown;">
            <div style="font-family: sans-serif; line-height: 1.6;">
                <h4 class="fw-bold mb-3" style="font-size: 26px;">¿Dónde estamos ubicados?</h4>
                <p class="mb-3" style="font-size: 17px; text-align: justify;">
                    En la esquina de la Calle Ruperto L. Paliza e Hidalgo S/N, en el mero Centro Histórico de Culiacán, Sinaloa.
                </p>
                <h4 class="fw-bold mb-2" style="font-size: 19px;">Horarios:</h4>
                <p class="mb-0" style="font-size: 17px;">
                    Martes a Sábado de 10:00 AM a 5:00 PM.
                </p>
            </div>
        </div>

    </div>
</div>
@endsection