<x-app-layout>
    <header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </header>
    <section class="edit-form">
        <div class="form-container">
        <h1 class="form dark:text-gray-200">Editar Cliente</h1>
            <form method="POST" action="{{ route('clientes.update', $cliente->id)}}">
                @csrf
                @method('PUT')

                <div class="form-label dark:text-gray-200">
                    <label  for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" value="{{ old('nome', $cliente->nome)}}" class="form-control form-control-lg form-input">
                </div>

                <div class="form-group dark:text-gray-200">
                    <label  for="email">Email:</label>
                    <textarea id="email" name="email" class="form-control form-input">{{ old('email', $cliente->email)}}</textarea>
                </div>

                <div class="form-group dark:text-gray-200">
                    <label class="form-label" for="telefone">Telefone:</label>
                    <textarea id="telefone" name="telefone" class="form-control form-control-lg form-input">{{ old('telefone', $cliente->telefone)}}</textarea>
                </div>

                <div class="form-group dark:text-gray-200">
                    <label class="form-label" for="endereco">Endereço:</label>
                    <textarea id="cpf" name="endereco" class="form-control form-control-lg form-input">{{ old('endereco', $cliente->endereco)}}</textarea>
                </div>

                <div class="form-group dark:text-gray-200">
                    <label class="form-label" for="cpf">Cpf:</label>
                    <textarea id="cpf" name="cpf" class="form-control form-control-lg form-input">{{ old('cpf', $cliente->cpf)}}</textarea>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a href="{{ route('clientes.index')}}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>    
        </div>
    </section>
</x-app-layout> 