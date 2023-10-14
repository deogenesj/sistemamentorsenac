<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
        return "entrou na função cadastrar";
    }

    public function home(){
        $ano = date('Y');
        return view('home', ['ano' => $ano, 'exemplo' => 'outro exemplo']);
    }
}
