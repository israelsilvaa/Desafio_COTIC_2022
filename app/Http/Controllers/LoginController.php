<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request){
        $erro = '';
        if ($request->get('erro') == 1){
            $erro = "usuario ou senha invalidos";
        }
        if($request->get('erro') == 2){
            $erro = "É necessário fazer login para acessar essa página";
        }

        return view('personagem.login', ['erro' => $erro]);
    }
    

    // regras>validar>pegar form>insta.USER>queryUser>
    public function acessar(Request $request){
        // validação do form
        $regras = [
            'email' => 'email',
            'senha' => 'required'
        ];
        $feedback = [
            'email.email' => 'Informe um email valido',
            'senha' => 'O campo senha é obrigatório'
        ];
        $request->validate($regras, $feedback);

        // pegar usuario e senha do form
        $email = $request->get('usuario');
        $senha = $request->get('senha');

        // instanciar e fazer query de busca no banco do usuario e senha informado no form
        $user = new User();

        // o "password" dp where se refere ao nome da coluna no banco.
        $usuario = $user->where('email',$email)->where('password', $senha)->get()->first();

        // Se retornar algo, então iniciamos a sessão, setamos nome e email, por fim redirecionamos para a home 
        if (isset($usuario->name)) {
            session_start();
            $_SESSION['nome'] = $usuario->name;
            $_SESSION['email'] = $usuario->email;
            return redirect()->route('home');
         } else {
            return redirect()->route('site.login', ['erro' => 1]);
         }   
    }

    public function sair(){
        session_start();
        session_destroy();
        return redirect()->route('home');
     }
}
