<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OpinionController;

Route::view('/', 'inicio')->name('inicio');
Route::view('/ubicacion', 'ubicacion')->name('ubicacion');
Route::view('/historia', 'historia')->name('historia');
Route::view('/caracteristicas', 'caracteristicas')->name('caracteristicas');
Route::view('/formulario', 'formulario')->name('formulario');

Route::get('/registrar', function () {
    return view('opiniones');
});
Route::post('/guardarOpinion', [OpinionController::class, 'guardarOpinion']);