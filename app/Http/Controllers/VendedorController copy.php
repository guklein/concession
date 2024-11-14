<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedor;

class VendedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vendedores = Vendedor::all();
        
        return view('vendedores.index', compact('vendedores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vendedores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $vendedor = Vendedor::findOrFail($id);
        return view('vendedores.show', compact('vendedor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $vendedor = Vendedor::findOrFail($id);
        return view('vendedores.edit', compact('vendedor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $vendedor = Vendedor::findOrFail($id);

        $vendedor->nome = $request->input('nome');
        $vendedor->endereco = $request->input('endereco');
        $vendedor->telefone = $request->input('telefone');
 
        $vendedor->save();
 
        return redirect()->route('vendedores.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vendedor = Vendedor::findOrFail($id);

        $vendedor->delete();
        return redirect()->route('vendedores.index');
    }
}
