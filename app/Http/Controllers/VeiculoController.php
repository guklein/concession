<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;

class VeiculoController extends Controller
{
    
    public function index()
    {
        $veiculos = Veiculo::all();
        
        return view('veiculos.index', compact('veiculos'));
    }

    public function create()
    {
        return view('veiculos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $veiculo = new Veiculo([
            'modelo' => $request->input('modelo'),
            'kmrodado' => $request->input('kmrodado'),
            'valor' => $request->input('valor'),
        ]);

        $veiculo->save();
        return redirect()->route('veiculos.index');
    }

    public function show(string $id)
    {
        $veiculo = Veiculo::findOrFail($id);
        return view('veiculos.show', compact('veiculo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $veiculo = Veiculo::findOrFail($id);
        return view('veiculos.edit', compact('veiculo'));
    }

    public function update(Request $request, $id)
    {
        $veiculo = Veiculo::findOrFail($id);

        $veiculo->modelo = $request->input('modelo');
        $veiculo->kmrodado = $request->input('kmrodado');
        $veiculo->valor = $request->input('valor');
 
        $veiculo->save();
 
        return redirect()->route('veiculos.index');
    }

    public function destroy(string $id)
    {
        $veiculo = Veiculo::findOrFail($id);

        $veiculo->delete();
        return redirect()->route('veiculos.index');
    }
}

