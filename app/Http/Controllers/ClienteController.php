<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //busca os clientes do banco
        $clientes = Cliente::all();
        //retorna a view
        return view('clientes.index', compact('clientes'));
    }

   
    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $cliente = new Cliente([
            'nome' => $request->input('nome'),
            'telefone' => $request->input('telefone'),
            'endereco' => $request->input('endereco'),
            'email' => $request->input('email'),
            'cpf' => $request->input('cpf')
        ]);

        $cliente->save();
        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       $cliente = Cliente::findOrFail($id);

       $cliente->nome = $request->input('nome');
       $cliente->email = $request->input('email');
       $cliente->telefone = $request->input('telefone');
       $cliente->endereco = $request->input('endereco');
       $cliente->cpf = $request->input('cpf');

       $cliente->save();

       return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
