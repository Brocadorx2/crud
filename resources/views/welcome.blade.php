@extends('layouts.main')

@section('title', 'Crud')

@section('content')
  <form action="/" method="GET">
    <input type="text" name="search" placeholder="Procure o jogo">
    <button class="buttom-principal" type="submit">Buscar</button>
  </form>
    <a href="/events/create">Adicionar jogo</a>
    <a href="/">Volta para a lista de jogos</a>
    @foreach($jogos as $jogo)
      <ul>
        <li>Nome: {{ $jogo->name_jogo }}</li>
        <li><p>Descrição: {{ $jogo->description}}</p></li>
          <td class="caixa-adita-deleta">
            <a class="editar" href="/events/edit/{{ $jogo->id }}">Editar</a>
            <form action="/events/{{ $jogo->id }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit">Deletar</button>
            </form>
          </td>
      </ul>     
    @endforeach

@endsection