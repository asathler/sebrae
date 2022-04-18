<!doctype html>
<head>
    <title>{{ env('APP_NAME') }}</title>
</head>

<body>
    <livro>
        <h1> {{ $livro['titulo'] }} </h1>
        <h4> {{ $livro['autor'] }} </h4>
        <p> {{ $livro['descricao'] }} </p>
    </livro>

    <a href="/livros">Voltar</a> -
    <form action="/livros/{{ $livro['id'] }}" method="POST">
        @csrf
        <button type="submit" title="Editar livro">
            Editar livro
        </button>
    </form>
    -
    <form action="/livros/{{ $livro['id'] }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" title="Excluir livro">
            Excluir livro
        </button>
    </form>
</body>
