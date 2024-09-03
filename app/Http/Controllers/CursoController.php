<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cursos = Curso::all();
        return view('cursos.index', compact('cursos'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cursos.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo => required|string|max:50',
            'descripcion => required|string|max:100',
        ]);
        Curso::create($request->all());
        return redirect()->route('cursos.index')->with('success', 'Curso creado con éxito');

        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Curso $cursos)
    {
        return view('cursos.show', compact('cursos'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Curso $cursos)
    {
        $cursos = Curso::all();
        return view('cursos.edit', compact('cursos'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $cursos->update($request->all());

        return redirect()->route('cursos.index')->with('success', 'cursos updated successfully.');

        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Curso $cursos)
    {
        $cursos->delete();

        return redirect()->route('cursos.index')->with('success', 'Curso deleted successfully.');

        //
    }
}
