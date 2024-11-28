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
                <th scope="col">Email</th>
                <th scope="col" mask="password">Senha</th>
                <th scope="col"></th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            
                <tr>
                    <td class="colunas">{{$user->id}}</td>
                    <td id="nome">{{$user->name}}</td>
                    <td id="email">{{$user->email}}</td>
                    <td mask="password" id="senha">{{$user->password}}</td>
                    <td>
                        <a href="{{ route('users.show', $user->id)}}" class="btn btn-info">Detalhes</a>
                        <a href="{{ route('users.edit', $user->id)}}" class="btn btn-info">Editar</a>
                        <form action="{{ route('users.destroy', $user->id)}}" method="POST" style="display: inline;">
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
        <a href="{{route('users.create')}}" class="btn btn-primary">Novo Usuario</a>
    </div>
</x-app-layout>