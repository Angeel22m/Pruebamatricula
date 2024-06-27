<?php

namespace App\Http\Controllers;
use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    //
    public function mostrarAlumnos(){
        $alumnos = Alumno::all();
       return view('mostrarAlumnos', compact('alumnos'));
    }
}
