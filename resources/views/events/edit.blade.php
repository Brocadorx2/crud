<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
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
      <table>
        <tr>
          <td>Nome: {{ $jogo->name_jogo }}</td>
          <td>Descrição: {{ $jogo->description}}</td>
        </tr>
      </table>     
    @endforeach
    
  </body>
</html>