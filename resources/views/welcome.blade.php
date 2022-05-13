<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Crud</title>

    <!-- Fonte do Google -->

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- CSS da aplicação -->
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/scripts.js"></script>

  </head>
  <body>

  <h1>Jogos</h1>
  <form action="/" method="GET">
    <input type="text" name="search" placeholder="Procure o jogo">
    <button type="submit">Buscar</button>
  </form>
    <a href="/events/create">Adicionar jogo</a>
    <a href="/">Volta para a lista de jogos</a>
    @foreach($jogos as $jogo)
      <ul>
        <li>Nome: {{ $jogo->name_jogo }}</li>
        <li><p>Descrição: {{ $jogo->description}}</p></li>
          <td>
            <a href="/events/edit/{{ $jogo->id }}">Editar</a>
            <form action="/events/{{ $jogo->id }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit">Deletar</button>
            </form>
          </td>
      </ul>     
    @endforeach

  </body>
</html>