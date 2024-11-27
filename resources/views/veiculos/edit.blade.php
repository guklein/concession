<x-app-layout>
    <header>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </header>
    <section class="edit-form">
        <div class="form-container dark:text-gray-200">
        <h3 class="form dark:text-gray-200">Editar Veiculo</h3>
            <form method="POST" action="{{ route('veiculos.update', $veiculo->id)}}">
                @csrf
                @method('PUT')
                <div class="form-label">
                    <label class="form-label" for="modelo">Modelo:</label>
                    <input type="text" id="modelo" name="modelo" value="{{ old('modelo', $veiculo->modelo)}}" class="form-control form-control-lg form-input">
                </div>

                <div class="form-label">
                    <label class="form-label" for="kmrodado">Km Rodado:</label>
                    <input id="kmrodado" name="kmrodado" class="form-control form-control-lg form-input" value="{{ old('kmrodado', $veiculo->kmrodado)}}">
                </div>

                <div class="form-group">
                    <label class="form-label" for="valor">Valor:</label>
                    <input  name="valor" class="form-control form-control-lg form-input" value="{{ old('valor', $veiculo->valor)}}">
                </div>
                <div class="form-group">
                    <label class="form-label" for="marca_id">Marca:</label>
                    <select name="marca_id" class="form-control">
                        @foreach ($marcas as $marca)
                            <option value="{{ $marca->id }}" {{ $marca->id == $veiculo->marca_id ? 'selected' : '' }}>{{ $marca->marca }}</option>
                        @endforeach
                    </select>
                </div>
                    <br>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a href="{{ route('veiculos.index')}}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>    
        </div>
    </section>
</x-app-layout>   