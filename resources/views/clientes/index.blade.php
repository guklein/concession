<x-app-layout> 
  <header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </header>
    

    <table class="table table-striped">
        
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Telefone</th>
                <th scope="col">Endereço</th>
                <th scope="col">Cpf</th>
                <th scope="col"></th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
            
                <tr>
                    <td class="colunas">{{$cliente->id}}</td>
                    <td id="nome">{{$cliente->nome}}</td>
                    <td id="email">{{$cliente->email}}</td>
                    <td id="telefone">{{$cliente->telefone}}</td>
                    <td id="endereco">{{$cliente->endereco}}</td>
                    <td id="cpf">{{$cliente->cpf}}</td>
                    <td>
                        <a href="{{ route('clientes.show', $cliente->id)}}" class="btn btn-info">Detalhes</a>
                        <a href="{{ route('clientes.edit', $cliente->id)}}" class="btn btn-info">Editar</a>
                        <form action="{{ route('clientes.destroy', $cliente->id)}}" method="POST" style="display: inline;">
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
        <a href="{{route('clientes.create')}}" class="btn btn-primary">Novo Cliente</a>
    </div>
</x-app-layout>