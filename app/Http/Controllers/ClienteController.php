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
        $messages = [
            'nome.required' => 'É necessario preencher o Nome do cliente',
            'telefone.required' => 'É necessario preencher o Telefone',
            'endereco.required' => 'É necessario preencher o Endereço',
            'email.required' => 'É necessario preencher o E-mail',
            'cpf.required' => 'É necessario preencher o CPF',
            'email.unique' => 'E-mail já cadastrado'        
        ];

        $request->validate([
            'nome' => 'required|string',
            'telefone' => 'required|string',
            'endereco' => 'required|string',
            'email' => 'required|string|unique:clientes',
            'cpf' => 'required|string'
        ],$messages);
    
        Cliente::create($request->all());
        
        return redirect()->route('clientes.index')->with('sucess', 'Cliente cadastrado com sucesso');
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
    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);

        $cliente->delete();
        return redirect()->route('clientes.index');
    }
}
