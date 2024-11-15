<x-app-layout> 
  <header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </header>
    

    <table class="table table-striped">
        
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Marca</th>

                
            </tr>
        </thead>
        <tbody>
            @foreach ($marcas as $marca)
            
                <tr>
                    <td class="colunas">{{$marca->id}}</td>
                    <td id="marca">{{$marca->marcas}}</td>
                    <td>
                        <a href="{{ route('marcas.show', $marca->id)}}" class="btn btn-info">Detalhes</a>
                        <a href="{{ route('marcas.edit', $marca->id)}}" class="btn btn-info">Editar</a>
                        <form action="{{ route('marcas.destroy', $marca->id)}}" method="POST" style="display: inline;">
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
        <a href="{{route('marcas.create')}}" class="btn btn-primary">Nova Marca</a>
    </div>
</x-app-layout>