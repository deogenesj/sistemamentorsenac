<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    //
    public function cadastrar(Request $request){
        
        $campos = $request->validate([
            'nome' => ['required', 'min: 3', 'max: 30', Rule::unique('usuarios', 'nome')],
            'email' => ['required', 'email', Rule::unique('usuarios', 'email')],
            'senha' => ['required', 'min: 8', 'confirmed'],
        ]);

        Usuario::create($campos);
        return "entrou na função cadastrar";//redirecionar para a página de logado. Criar lógica de login()
    }

    public function logar(Request $request){
        $campos = $request->validate([
            'login' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        //Função auth()->attempt() tenta fazer o login. Retorna true se deu certo, false se não deu certo
        //Dentro do attempt() colocamos os parâmetros que serão utilizados para a tentativa de autenticação
        if(auth()->attempt(['email' => $campos['login'], 'password' => $campos['password']])){
            $request->session()->regenerate();//gera um cookie para ficarmos logados, até clicar no botão de deslogar
            //que destroi o cookie

            return redirect('/')->with('success', 'Você logou com sucesso!');
        }else{
            return redirect('/')->with('failure', 'Login inválido!');
        }
    }


    public function logout(){
        auth()->logout();//destroi o cookie com a função logout() já pronta do laravel
        return redirect('/')->with('success', 'Você deslogou com sucesso!');
    }

    
    public function home(){
        $ano = date('Y');
        return view('home', ['ano' => $ano, 'exemplo' => 'outro exemplo']);
    }
}
