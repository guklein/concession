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
        $vendedor = new Vendedor([
            'nome' => $request->input('nome'),
            'telefone' => $request->input('telefone'),
            'endereco' => $request->input('endereco'),
        ]);

        $vendedor->save();
        return redirect()->route('vendedores.index');
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
