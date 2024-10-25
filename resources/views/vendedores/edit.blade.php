
    <section class="edit-form">
        <div class="form-container">
            <form method="POST" action="{{ route('vendedores.update', $vendedor->id)}}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label class="form-label" for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" value="{{ old('nome', $vendedor->nome)}}" class="form-input">
                </div>

                <div class="form-group">
                    <label class="form-label" for="telefone">Telefone:</label>
                    <textarea id="telefone" name="telefone" class="form-textarea">{{ old('telefone', $vendedor->telefone)}}</textarea>
                </div>

                <div class="form-group">
                    <label class="form-label" for="endereco">Endereço:</label>
                    <textarea id="cpf" name="endereco" class="form-textarea">{{ old('endereco', $vendedor->endereco)}}</textarea>
                </div>


                <div class="form-actions">
                    <button type="submit" class="btn-primary">Salvar</button>
                    <a href="{{ route('vendedores.index')}}" class="btn-secondary">Cancelar</a>
                </div>
            </form>    
        </div>
    </section>
   