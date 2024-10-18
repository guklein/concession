
    <section class="edit-form">
        <div class="form-container">
            <form method="POST" action="{{ route('clientes.update', $cliente->id)}}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label class="form-label" for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" value="{{ old('nome', $cliente->nome)}}" class="form-input">
                </div>

                <div class="form-group">
                    <label class="form-label" for="email">Email:</label>
                    <textarea id="email" name="email" class="form-textarea">{{ old('email', $cliente->email)}}</textarea>
                </div>

                <div class="form-group">
                    <label class="form-label" for="telefone">Telefone:</label>
                    <textarea id="telefone" name="telefone" class="form-textarea">{{ old('telefone', $cliente->telefone)}}</textarea>
                </div>

                <div class="form-group">
                    <label class="form-label" for="endereco">Endereço:</label>
                    <textarea id="cpf" name="endereco" class="form-textarea">{{ old('endereco', $cliente->endereco)}}</textarea>
                </div>

                <div class="form-group">
                    <label class="form-label" for="cpf">Cpf:</label>
                    <textarea id="cpf" name="cpf" class="form-textarea">{{ old('cpf', $cliente->cpf)}}</textarea>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn-primary">Salvar</button>
                    <a href="{{ route('clientes.index')}}" class="btn-secondary">Cancelar</a>
                </div>
            </form>    
        </div>
    </section>
   