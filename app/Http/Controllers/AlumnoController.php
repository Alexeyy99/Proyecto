<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function registrarAlumno()
    {
        $alumno = new Alumno();
        $alumno->nombre = 'Alexey';
        $alumno->expediente = '18304038';
        $alumno->carrera = 'Ingenieria en desarrollo de software';
        $alumno->edad = 21;
        $alumno->save();
    }
}
