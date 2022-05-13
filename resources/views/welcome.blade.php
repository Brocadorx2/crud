<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Crud</title>

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
      <table>
        <tr>
          <td>Nome: {{ $jogo->name_jogo }}</td>
          <td>Descrição: {{ $jogo->description}}</td>
          <td>
            <a href="/events/edit/{{ $jogo->id }}">Editar</a>
            <form action="/events/{{ $jogo->id }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit">Deletar</button>
            </form>
          </td>
        </tr>
      </table>     
    @endforeach

  </body>
</html>