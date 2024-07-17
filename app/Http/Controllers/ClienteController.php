<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::orderBy('id', 'desc')->get();
        return view('Cliente.index', compact('clientes'));
    }

    public function create()
    {
        return view('Cliente.create');
    }

    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->codigo = $request->codigo;
        $cliente->tfno = $request->tfno;
        $cliente->num_social = $request->num_social;
        $cliente->domicilio = $request->domicilio;

        $cliente->save();

        return redirect()->route('Cliente.index');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('Cliente.index');
    }

    public function show(Cliente $cliente)
    {
        return view('Cliente.show', compact('cliente'));
    }

    public function edit(Cliente $cliente)
    {
        return view('Cliente.edit', compact('cliente'));
    }

    public function update(Request $request, Cliente $cliente)
    {
        $cliente->codigo = $request->codigo;
        $cliente->tfno = $request->tfno;
        $cliente->num_social = $request->num_social;
        $cliente->domicilio = $request->domicilio;

        $cliente->save();

        return redirect()->route('Cliente.index');
    }
}
