<x-app-layout> 
  <header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </header>
    

    <table class="table table-striped">
        
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Modelo</th>
                <th scope="col">Km Rodado</th>
                <th scope="col">Valor</th>
                <th scope="col">Marca</th>
                <th scope="col"></th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($veiculos as $veiculo)
            
                <tr>
                    <td class="colunas">{{$veiculo->id}}</td>
                    <td id="modelo">{{$veiculo->modelo}}</td>
                    <td id="kmrodado">{{$veiculo->kmrodado}}</td>
                    <td id="endereco">{{$veiculo->valor}}</td>
                    <td id="marca">{{$veiculo->marca->marca}}</td>
                    <td>
                        <a href="{{ route('veiculos.show', $veiculo->id)}}" class="btn btn-info">Detalhes</a>
                        <a href="{{ route('veiculos.edit', $veiculo->id)}}" class="btn btn-info">Editar</a>
                        <form action="{{ route('veiculos.destroy', $veiculo->id)}}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form> 
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div align="right">
        <a href="{{route('veiculos.create')}}" class="btn btn-primary">Novo Veiculo</a>
    </div>
</x-app-layout>