<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;
use App\Models\Cliente;
use App\Models\Veiculo;
use App\Models\Vendedor;

class VendaController extends Controller
{
    public function index()
    {
        $vendas = Venda::with('cliente', 'veiculo', 'vendedor')->get();
        return view('vendas.index', compact('vendas'));
    }

    public function create()
    {
        $clientes = Cliente::all();
        $veiculos = Veiculo::all();
        $vendedores = Vendedor::all();
        return view('vendas.create', compact('clientes', 'veiculos', 'vendedores'));
    }

    public function store(Request $request)
    {
        $venda = Venda::create([
            'cliente_id' => $request->cliente_id,
            'veiculo_id' => $request->veiculo_id,
            'vendedor_id' => $request->vendedor_id,
        ]);
    
        return redirect()->route('vendas.index')->with('success', 'Venda cadastrada com sucesso!');
    }
    public function edit(Venda $venda)
    {
        $clientes = Cliente::all();
        $veiculos = Veiculo::all();
        $vendedores = Vendedor::all();
        return view('vendas.edit', compact('venda', 'clientes', 'veiculos', 'vendedores'));
    }

    public function update(Request $request, Venda $venda)
    {
        $request->validate($this->rules);
        $venda->update($request->all());
        return redirect()->route('vendas.index')->with('success', 'Venda atualizada com sucesso!');
    }

    public function destroy(Venda $venda)
    {
        $venda->delete();
        return redirect()->route('vendas.index')->with('success', 'Venda excluída com sucesso!');
    }
}


