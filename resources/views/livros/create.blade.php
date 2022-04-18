<!doctype html>
<head>
    <title>{{ env('APP_NAME') }}</title>
</head>

<body>
    <h1> Criar novo livro </h1>

    <form method="POST" action="/livros">
        @csrf

        <input type="text" id="titulo" required />
        <input type="text" id="autor" required />
        <input type="text" id="descricao" />

        <button type="submit"> Criar novo livro </button>
    </form>

    <a href="/livros">Voltar</a>
</body>
