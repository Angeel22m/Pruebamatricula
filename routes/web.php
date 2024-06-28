<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/alumnos/mostrar', [AlumnosController::class, 'mostrarAlumnos']);

Route::get('/alumnos/agregar',[AlumnosController::class, 'agregar'])->name('alumnos.agregar');

Route::post('/alumnos/guardar',[AlumnosController::class, 'save'])->name('alumno.guardar');

Route::get('alumnos/editar/{id}',[AlumnosController::class, 'editar']);

Route::get('alumnos/editar/salvar/{id}',[AlumnosController::class, 'salvar'])->name('alumno.salvar');