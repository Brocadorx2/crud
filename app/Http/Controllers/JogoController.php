<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Jogo;

class JogoController extends Controller
{
  public function index() {

    $search = request('search');

    if($search){

      $jogos = Jogo::where([
         ['name_jogo', 'like', '%'.$search.'%']
      ])->get();

    } else {

      $jogos = Jogo::all();

    }

    return view('welcome',['jogos' => $jogos, 'search' => $search]);

  }

  public function create() {

    $jogos = Jogo::all();

      return view('events.create', ['jogos' => $jogos]);

  }

  public function store(Request $request) {

    $jogo = new Jogo;

    $jogo->name_jogo = $request->name_jogo;
    $jogo->description = $request->description;

    $jogo->save();

    return redirect('/');

  }

  public function destroy($id) {

    Jogo::findOrFail($id)->delete();

    return redirect('/')->with('msg', 'Jogo excluido com sucesso!');

  }

  public function edit($id) {

    $jogo = Jogo::findOrFail($id);

    $jogos = Jogo::all();

    return view('events.edit', ['jogos' => $jogos], ['jogo' => $jogo]);

  }

  public function update(Request $request) {

    Jogo::findOrFail($request->id)->update($request->all());

    return redirect('/')->with('msg', 'Jogo editado com sucesso!');

  }


}
