<x-app-layout>
    <header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </header> 
  <body>
        <div class="mb-3">
            <h3 class="form dark:text-gray-200">Novo Veiculo</h3>
                <form class="form-label dark:text-gray-200" action="{{ route('veiculos.store') }}" method="POST">
                    <!-- Token CSRF para proteção contra ataques CSRF -->
                        @csrf
                    <div class="form-group">
                        <label for="modelo">Modelo:</label>
                        <input class="form-control form-control-lg" type="text" name="modelo">
                    </div>

                    <div class="form-group">
                        <label for="kmrodado">Km Rodado:</label>
                        <input class="form-control form-control-lg" type="text" name="kmrodado">
                    </div>

                    <div class="form-group">
                        <label for="valor">Valor:</label>
                        <input class="form-control form-control-lg" type="text" name="valor">
                    </div>
                    <div class="form-group">
                        <label  for="marca_id">Marca:</label>
                        <select class="form-control form-control-lg" name="marca_id" class="form-control">
                            @foreach ($marcas as $marca)
                                <option value="{{ $marca->id  
                            }}">{{ $marca->marca }}</option>
                            @endforeach
                        </select>
                    </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a href="{{ route('veiculos.index') }}" class="btn btn-secondary">Cancelar</a>
                </form>
        </div>
    </body>
</x-app-layout>