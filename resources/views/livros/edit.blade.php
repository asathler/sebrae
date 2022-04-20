<!doctype html>
<head>
    <title>{{ env('APP_NAME') }}</title>
</head>

<body>
    <h1> Editar livro </h1>

    <form method="POST" action="/livros/{{ $livro->id }}">
        @csrf
        @method('PUT')

        <div>
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" value="{{ $livro->titulo }}" required />
            @error('titulo')
                <p style="color: red;">{{ $errors->first('titulo') }}</p>
            @enderror
        </div>

        <div>
            <label for="autor">Autor:</label>
            <input type="text" id="autor" name="autor" value="{{ $livro->autor }}" required />
            @error('autor')
                <p style="color: red;">{{ $errors->first('autor') }}</p>
            @enderror
        </div>

        <div>
            <label for="descricao">Descrição:</label>
            <input type="text" id="descricao" name="descricao" value="{{ $livro->descricao }}" />
            @error('descricao')
                <p style="color: red;">{{ $errors->first('descricao') }}</p>
            @enderror
        </div>

        <button type="submit"> Atualizar livro </button>
    </form>

    <a href="/livros">Voltar</a>
</body>
