@extends('layouts.master')

@section('title', 'Formulario de opinión')

@section('styles')
<style>
    body {
        background-image: url('{{ asset('img/MasinFondo.jpeg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
</style>
@endsection

@section('content')
<div class="container-md mt-5 mx-auto p-4 rounded" style="background-color: rgb(202, 152, 58);">
    <form>
        <div class="mb-3">
            <label for="correo" class="form-label">Dirección de correo</label>
            <input type="email" name="correo" class="form-control" id="correo" placeholder="nombre@ejemplo.com">
        </div>
        <div class="mb-3">
            <label for="mensaje" class="form-label">¡Cuéntanos tu experiencia!</label>
            <textarea name="mensaje" class="form-control" id="mensaje" rows="6"></textarea>
        </div>
        <button type="button" class="btn btn-primary"
            style="background-color: rgb(255, 255, 255); color: black;">Enviar</button>
    </form>
</div>
@endsection
