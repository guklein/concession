<body>
    <div class="container">
        <h1>Novo Cliente</h1>
            <form action="{{ route('clientes.store') }}" method="POST">
                <!-- Token CSRF para proteção contra ataques CSRF -->
                    @csrf
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" name="email">
                </div>
                <div class="form-group">
                    <label for="telefone">telefone:</label>
                    <input type="text" name="telefone">
                </div>
                <div class="form-group">
                    <label for="endereco">Endereço:</label>
                    <input type="text" name="endereco">
                </div>
                <div class="form-group">
                    <label for="cpf">Cpf:</label>
                    <input type="text" name="cpf">
                </div>

                    <button type="submit" class="btn btn-success">Salvar</button>
                    <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
    </div>
</body>