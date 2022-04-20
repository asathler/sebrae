<!doctype html>
<head>
    <title>{{ env('APP_NAME') }}</title>
</head>

<body>
    <h1> Listagem de livros </h1>

    @foreach($livros as $livro)
        <livro>
            <h2><a href="/livros/{{ $livro['id'] }}">{{ $livro['titulo'] }}</a> </h2>
            <h4> {{ $livro['autor'] }} </h4>
            <p> {{ $livro['descricao'] }} </p>
        </livro>
    @endforeach

    <form action="/livros/create" method="GET">
        <button type="submit" title="Criar novo livro">
            Criar novo livro
        </button>
    </form>
</body>
