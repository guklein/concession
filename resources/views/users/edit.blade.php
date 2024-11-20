<x-app-layout>
    <header>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </header>
    <section class="edit-form">
        <div class="form-container dark:text-gray-200">
        <h3 class="form dark:text-gray-200">Editar Usuario</h3>
            <form method="POST" action="{{ route('users.update', $user->id)}}">
                @csrf
                @method('PUT')

                <div class="form-label">
                    <label class="form-label" for="name">Nome:</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $user->name)}}" class="form-control form-control-lg form-input">
                </div>

                <div class="form-label">
                    <label class="form-label" for="email">Email:</label>
                    <input id="email" name="email" class="form-control form-control-lg form-input" value="{{ old('email', $user->email)}}">
                </div>

                <div class="form-group">
                    <label class="form-label" for="password">Senha:</label>
                    <input id="password" type="password" name="password" class="form-control form-control-lg form-input" value="{{ old('password', $user->password)}}">
                </div>
                    <br>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a href="{{ route('users.index')}}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>    
        </div>
    </section>
</x-app-layout>   