<x-app-layout>
    <header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </header>
    <section class="edit-form">
        <div class="form-container dark:text-gray-200">
        <h3 class="form dark:text-gray-200">Editar Cliente</h3>
            <form method="POST" action="{{ route('clientes.update', $cliente->id)}}">
                @csrf
                @method('PUT')

                <div class="form-label">
                    <label  for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" value="{{ old('nome', $cliente->nome)}}" class="form-control form-control-lg form-input">
                </div>

                <div class="form-label">
                    <label  for="email">Email:</label>
                    <input id="email" name="email" class="form-control form-control-lg form-input" value="{{ old('email', $cliente->email)}}">
                </div>

                <div class="form-label">
                    <label for="telefone">Telefone:</label>
                    <input id="telefone" name="telefone" class="form-control form-control-lg form-input" value="{{ old('telefone', $cliente->telefone)}}">
                </div>

                <div class="form-label">
                    <label for="endereco">Endereço:</label>
                    <input id="cpf" name="endereco" class="form-control form-control-lg form-input" value="{{ old('endereco', $cliente->endereco)}}">
                </div>

                <div class="form-label">
                    <label  for="cpf">Cpf:</label>
                    <input id="cpf" name="cpf" class="form-control form-control-lg form-input" value="{{ old('cpf', $cliente->cpf)}}">
                </div>
                    <br>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a href="{{ route('clientes.index')}}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>    
        </div>
    </section>
</x-app-layout> 