<?php

namespace App\Http\Controllers;

use App\Models\Personagens;
use Illuminate\Http\Request;

class PersonagemController extends Controller
{
    public function index (){
        return view('personagem.list');
    }

    public function create(){
        return view('personagem.form');
    }

    public function store(Request $request){
        
        $personagem = new Personagens;
        $personagem->nome = $request->nome;
        $personagem->idade = $request->idade;
        $personagem->interprete = $request->interprete;
        $personagem->alinhamento = $request->alinhamento;
        $personagem->biografia = $request->biografia;
        
        $personagem->save();

        return redirect('/personagem/form')->with('msg', 'Personagem criado com sucesso!');
    }

    public function show(){

        $personagens = Personagens::all();
        
        return view('personagem.list', ['personagensVetor' => $personagens]);
    }

    public function update(Request $request){
        
        $dado = $request->all();

        Personagens::findOrFail($request->id)->update($dado);

        return redirect('/list')->with('msg', 'Personagem editado com sucesso!');
    }
    
    public function edit($id){

        $personagem = Personagens::findOrFail($id);

        return view('/personagem.edit', ['personagem' => $personagem]);
    }

    public function delete($id){

        Personagens::findOrFail($id)->delete();

        return redirect('list')->with('msg', 'Personagem deletado com sucesso!');
    }

    public function sobre(){
        return view('personagem.sobre');
    }
}
