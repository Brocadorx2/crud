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
  <h1>Editar Jogo</h1>
    <form action="/events/update/{{ $jogo->id }}" method="POST">
      @csrf
      @method('PUT')
      <p>
        <label>Nome do Jogo:</label>
        <input type="text" name="name_jogo" placeholder="Nome do Jogo" value="{{ $jogo -> name_jogo }}"/>
      </p>
      <p>
        <label>Descrição:</label>
        <textarea name="description" placeholder="Adicione uma descrição">{{ $jogo -> description }}</textarea>
      </p>
      <input type="submit" value="Editar Jogo">
    </form>
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