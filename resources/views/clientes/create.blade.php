<body>
    <div class="container">
        <h1>Novo Autor</h1>
            <form action="{{ route('clientes.store') }}" method="POST">
                <!-- Token CSRF para proteção contra ataques CSRF -->
                    @csrf
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome">
                </div>
        
                
                
                    <button type="submit" class="btn btn-success">Salvar</button>
                    <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
    </div>
</body>