<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Materia;
use Illuminate\Http\Request;

class TablaPivoteController extends Controller
{
    public function agregarMateria(Estudiante $estudiante)
    {
        $materias = Materia::all();

        return view('tablapivote.agregarMateriaAlumno', compact('materias', 'estudiante'));
    }

    public function asignarMateria(Estudiante $estudiante, Request $request)
    {
        $request->validate([
            'id' => 'required'
        ]);

        $estudiante->materias()->attach([
            'materia_id' => $request->id
        ]);

        $estudiante->save();

        return view('estudiantes.estudiantesShow', compact('estudiante'));
    }
}
