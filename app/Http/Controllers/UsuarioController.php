<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //
    public function home(){
        $ano = date('Y');
        return view('home');
    }
}
