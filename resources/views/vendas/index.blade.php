<x-app-layout> 
  <header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </header>
    

    <table class="table table-striped">
        
        <tbody>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Cliente</th>
                <th scope="col">Veículo</th>
                <th scope="col">Vendedor</th>
            </tr>
        </thead>


            @foreach ($vendas as $venda)
            <tr>
                <td class="colunas">{{ $venda->id }}</td>
                <td class="colunas">{{ $venda->cliente->nome }}</td>
                <td class="colunas">{{ $venda->veiculo->modelo }}</td>
                <td class="colunas">{{ $venda->vendedor->nome }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div align="right">
        <a href="{{route('vendas.create')}}" class="btn btn-primary">Nova Venda</a>
    </div>
</x-app-layout>