<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/alumnos/mostrar', [AlumnosController::class, 'mostrarAlumnos'])->name('alumno.mostrar');

Route::get('/alumnos/agregar',[AlumnosController::class, 'agregar'])->name('alumno.agregar');

Route::post('/alumnos/guardar',[AlumnosController::class, 'save'])->name('alumno.guardar');

Route::get('alumnos/editar/{id}',[AlumnosController::class, 'editar'])->name('alumno.editar');

Route::get('alumnos/editar/salvar/{id}',[AlumnosController::class, 'salvar'])->name('alumno.salvar');
Route::get('alumnos/eliminar/{id}',[AlumnosController::class, 'eliminar'])->name('alumno.eliminar');

Route::get('alumnos/eliminar/salvar/{id}',[AlumnosController::class, 'EliminarSalvar'])->name('alumno.elimnar.salvar');