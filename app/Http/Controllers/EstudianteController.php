<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Http\Controllers\TablaPivoteController;
use App\Models\Materia;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiantes/estudiantesIndex', compact('estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estudiantes.estudiantesForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'codigo' => 'required|integer|unique:App\Models\Estudiante,codigo',
            'carrera' => 'nullable',
            'creditos_cursados' => 'integer|min:0',
            'correo' => 'nullable|unique:App\Models\Estudiante,correo' //|unique:estudiantes, correo
        ]);

        $estudiante = new Estudiante();
        $estudiante->nombre = $request->nombre;
        $estudiante->codigo = $request->codigo;
        $estudiante->carrera = $request->carrera;
        $estudiante->creditos_cursados = $request->creditos;
        $estudiante->correo = $request->correo;
        
        $estudiante->save();

        return redirect()->route('estudiante.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiante $estudiante)
    {
        return view('estudiantes.estudiantesShow', compact('estudiante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudiante $estudiante)
    {
        return view('estudiantes.estudiantesEdit', compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudiante $estudiante)
    {
        $request->validate([
            'nombre' => 'required',
            'codigo' => [
                'required',
                Rule::unique('estudiantes')->ignore($estudiante->id),
            ],
            'carrera' => 'nullable',
            'creditos_cursados' => 'integer|min:0',
            'correo' => [
                //Rule::unique('estudiantes')->ignore($estudiante->correo),
                'nullable',
            ]
        ]);

        $estudiante->nombre = $request->nombre;
        $estudiante->codigo = $request->codigo;
        $estudiante->carrera = $request->carrera;
        $estudiante->creditos_cursados = $request->creditos;
        $estudiante->correo = $request->correo;
        
        $estudiante->save();

        return redirect()->route('estudiante.show', $estudiante);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();

        return redirect()->route('estudiante.index');
    }
}
