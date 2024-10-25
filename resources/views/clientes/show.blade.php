<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Clientes')}}
    </h2>
</x-slot>
    <section class="details">
        <div class="content">
            <div class="meta">
                <span class="label">ID:</span>
                <span class="info">{{ $cliente->id}}</span>
            </div>

            <div class="meta">
                <span class="label">Nome:</span>
                <span class="info">{{ $cliente->nome}}</span>
            </div>

            <div class="meta">
                <span class="label">E-mail:</span>
                <span class="info">{{ $cliente->email}}</span>
            </div>

            <div class="meta">
                <span class="label">Telefone:</span>
                <span class="info">{{ $cliente->telefone}}</span>
            </div>

            <div class="meta">
                <span class="label">Endereço:</span>
                <span class="info">{{ $cliente->endereco}}</span>
            </div>

            <div class="meta">
                <span class="label">Cpf:</span>
                <span class="info">{{ $cliente->cpf}}</span>
            </div>
        </div>
        <a href="{{ route('clientes.index')}}" class="btn-return">Voltar</a>
    </section>