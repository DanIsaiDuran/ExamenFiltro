<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias = Materia::all();
        return view('materias.materiasIndex', compact('materias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('materias.materiasForm');
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
            'creditos' => 'required|integer|min:1',
            'profesor' => 'required',
            'turno' => 'required',
            'disponible' => 'required',
        ]);

        $materia = new Materia();
        $materia->nombre = $request->nombre;
        $materia->creditos = $request->creditos;
        $materia->profesor = $request->profesor;
        $materia->turno = $request->turno;
        $materia->disponible = $request->disponible;

        $materia->save();

        return redirect()->route('materia.index');
    }

    
    public function show(Materia $materia)
    {
        
        return view('materias.materiasShow', compact('materia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function edit(Materia $materia)
    {
        return view('materias.materiasEdit', compact('materia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materia $materia)
    {
        $request->validate([
            'nombre' => 'required',
            'creditos' => 'required|integer|min:1',
            'profesor' => 'required',
            'turno' => 'required',
            'disponible' => 'required',
        ]);

        $materia->nombre = $request->nombre;
        $materia->creditos = $request->creditos;
        $materia->profesor = $request->profesor;
        $materia->turno = $request->turno;
        $materia->disponible = $request->disponible;

        $materia->save();

        return redirect()->route('materia.show', compact('materia'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materia $materia)
    {
        $materia->delete();

        return redirect()->route('materia.index');
    }
}
