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
    public function agregar(){

        return view('agregaralumno');
    }
    public function save(Request $request){
        $nvAlumno = new Alumno();
        $nvAlumno->nombre = $request->nombre;
        $nvAlumno->apellido = $request->apellido;
        $nvAlumno->telefono = $request->telefono;
        $nvAlumno->save();

        return redirect('alumnos/mostrar');
    } }
    


