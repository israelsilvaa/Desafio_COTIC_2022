<?php

namespace App\Http\Controllers;

use App\Models\Personagens;
use Illuminate\Http\Request;

class PersonagemController extends Controller
{
    public function index (){
        return view('home');
    }

    public function create(){
        return view('personagem.form');
    }

    public function show(){

        $personagens = Personagens::all();
        
        return view('personagem.list', ['personagensVetor' => $personagens]);
    }

    public function store(Request $request){
        
        $personagem = new Personagens;
        $personagem->nome = $request->nome;
        $personagem->idade = $request->idade;
        $personagem->interprete = $request->interprete;
        $personagem->alinhamento = $request->alinhamento;
        $personagem->biografia = $request->biografia;
        
        $personagem->save();

        return redirect('/form')->with('msg', 'Personagem criado com sucesso!');
    }


}
