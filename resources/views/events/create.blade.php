@extends('layouts.main')

@section('title', 'Crud')

@section('content')
  <h2>Adicione um Jogo</h2>
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
    
@endsection