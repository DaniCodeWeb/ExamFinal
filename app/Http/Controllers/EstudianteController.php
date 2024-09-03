<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;



class EstudianteController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiantes.index', compact('estudiantes'));
    }

    public function create()
    {
        return view('estudiantes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:estudiantes,email',
            'telefono' => 'required|string|max:20',
            'direccion' => 'required|string|max:255',
            'ciudad' => 'required|string|max:100',
            'pais' => 'required|string|max:100',
            'fecha_nacimiento' => 'required|date',
            'genero' => 'nullable|in:male,female',
        ]);

        $estudiante = Estudiante::create($request->all());
        return redirect()->route('estudiantes.index');
    }

    public function show(string $id)
    {
        $estudiante = Estudiante::findOrFail($id);
        return view('estudiantes.show', compact('estudiante'));
    }

    public function edit(Estudiante $estudiante)
    {

        return view('estudiantes.edit', compact('estudiante'));
    }

    public function update(Request $request, string $id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:estudiantes,email,' . $estudiante->id,
            'telefono' => 'required|string|max:20',
            'direccion' => 'required|string|max:255',
            'ciudad' => 'required|string|max:100',
            'pais' => 'required|string|max:100',
            'fecha_nacimiento' => 'required|date',
            'genero' => 'nullable|in:male,female',
        ]);

        $estudiante->update($request->all());
        return redirect()->route('estudiantes.index');
    }

    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();
        return redirect()->route('estudiantes.index')->with('success', 'El cliente fue eliminado correctamente');
    }
}

