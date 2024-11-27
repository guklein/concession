<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;
use App\Models\Marca;

class VeiculoController extends Controller
{
    
    public function index()
    {
        $veiculos = Veiculo::all();
        
        return view('veiculos.index', compact('veiculos'));
    }

    public function create()
    {
        $marcas = Marca::all();
        return view('veiculos.create', compact('marcas'));

    }

    public function store(Request $request)
    {
        $request->validate([
            'modelo' => 'required',
            'kmrodado' => 'required|numeric',
            'valor' => 'required|numeric',
            'marca_id' => 'required|integer', 
        ]);
    
        $veiculo = Veiculo::create($request->all());
    
        return redirect()->route('veiculos.index');
    }

    public function show(string $id)
    {
        $veiculo = Veiculo::findOrFail($id);
        $veiculoMarca = $veiculo->marca;

        return view('veiculos.show', compact('veiculoMarca'));
    }

 
    public function edit(Veiculo $veiculo)
    {
        $marcas = Marca::all(); 
        return view('veiculos.edit', compact('veiculo', 'marcas'));
    }

    public function update(Request $request, $id)
    {
        $veiculo = Veiculo::findOrFail($id);
    
        $veiculo->modelo = $request->input('modelo');
        $veiculo->kmrodado = $request->input('kmrodado');
        $veiculo->valor = $request->input('valor');
        $veiculo->marca_id = $request->input('marca_id'); 
    
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

