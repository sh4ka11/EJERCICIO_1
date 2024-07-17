<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function index()
    {
        $proyecto = Proyecto::orderBy('id', 'desc')->get();
        return view('Proyecto.index', compact('proyecto'));
    }

    public function create()
    {
        return view('Proyecto.create');
    }

    public function store(Request $request)
    {
        $proyecto = new Proyecto();
        $proyecto->codigo = $request->codigo;
        $proyecto->descripcion = $request->descripcion;
        $proyecto->fecha_inicio = $request->fecha_inicio;
        $proyecto->fecha_fin = $request->fecha_fin;
        $proyecto->cuantia = $request->cuantia;

        $proyecto->save();

        return redirect()->route('Proyecto.index');
    }

    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();
        return redirect()->route('Proyecto.index');
    }

    public function show(Proyecto $proyecto)
    {
        return view('Proyecto.show', compact('proyecto'));
    }

    public function edit(Proyecto $proyecto)
    {
        return view('Proyecto.edit', compact('proyecto'));
    }

    public function update(Request $request, Proyecto $proyecto)
    {
        $proyecto->codigo = $request->codigo;
        $proyecto->descripcion = $request->descripcion;
        $proyecto->fecha_inicio = $request->fecha_inicio;
        $proyecto->fecha_fin = $request->fecha_fin;
        $proyecto->cuantia = $request->cuantia;

        $proyecto->save();

        return redirect()->route('Proyecto.index');
    }
}