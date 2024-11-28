<x-app-layout>
    <header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </header> 
  <body>
        <div class="mb-3">
            <h3 class="form dark:text-gray-200">Novo Vendedor</h3>
                <form class="form-label dark:text-gray-200" action="{{ route('vendas.store') }}" method="POST">
                    <!-- Token CSRF para proteção contra ataques CSRF -->
                        @csrf
                        <div class="form-group">
                            <label  for="cliente_id">Cliente:</label>
                            <select class="form-control form-control-lg" name="cliente_id" class="form-control">
                                @foreach ($clientes as $cliente)
                                    <option value="{{ $cliente->id  
                                }}">{{ $cliente->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label  for="vendedor_id">Vendedor:</label>
                            <select class="form-control form-control-lg" name="vendedor_id" class="form-control">
                                @foreach ($vendedores as $vendedor)
                                    <option value="{{ $vendedor->id  
                                }}">{{ $vendedor->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label  for="veiculo_id">Veiculo:</label>
                            <select class="form-control form-control-lg" name="veiculo_id" id="veiculo_id" class="form-control">
                                @foreach ($veiculos as $veiculo)
                                <option value="{{ $veiculo->id }}" valor="{{ $veiculo->valor }}">{{ $veiculo->modelo }} - R$ {{ $veiculo->valor }}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a href="{{ route('vendas.index') }}" class="btn btn-secondary">Cancelar</a>
                </form>
        </div>
    </body>
</x-app-layout>