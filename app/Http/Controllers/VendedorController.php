<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedor;

class VendedorController extends Controller
{

    public function index()
    {
        $vendedores = Vendedor::all();
        
        return view('vendedores.index', compact('vendedores'));
    }


    public function create()
    {
        return view('vendedores.create');
    }


    public function store(Request $request)
    {
                $messages = [
            'nome.required' => 'É necessario preencher o Nome',
            'telefone.required' => 'É necessario preencher o Telefone',
            'endereco.required' => 'É necessario preencher o Endereço'
        ];

        $request->validate([
            'nome' => 'required|string',
            'telefone' => 'required|string',
            'endereco' => 'required|string',
        ],$messages);

        Vendedor::create($request->all());
        return redirect()->route('vendedores.index')->with('sucess', 'Vendedor criado com sucesso');
    }


    public function show(string $id)
    {
        $vendedor = Vendedor::findOrFail($id);
        return view('vendedores.show', compact('vendedor'));
    }

    public function edit(string $id)
    {
        $vendedor = Vendedor::findOrFail($id);
        return view('vendedores.edit', compact('vendedor'));
    }

    public function update(Request $request, $id)
    {
        $vendedor = Vendedor::findOrFail($id);

        $vendedor->nome = $request->input('nome');
        $vendedor->endereco = $request->input('endereco');
        $vendedor->telefone = $request->input('telefone');
 
        $vendedor->save();
 
        return redirect()->route('vendedores.index');
    }


    public function destroy(string $id)
    {
        $vendedor = Vendedor::findOrFail($id);

        $vendedor->delete();
        return redirect()->route('vendedores.index');
    }
}
