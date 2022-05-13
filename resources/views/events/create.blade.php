<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
  </head>
  <body>
  <h1>Adicione um Jogo</h1>
    <form action="/events" method="POST">
      @csrf
      <p>
        <label>Nome do Jogo:</label>
        <input type="text" name="name_jogo" placeholder="Nome do Jogo"/>
      </p>
      <p>
        <label>Descrição:</label>
        <textarea name="description" placeholder="Adicione uma descrição"></textarea>
      </p>
      <input type="submit" value="Adicionar Jogo">
    </form>
    
  </body>
</html>