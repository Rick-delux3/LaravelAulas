<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal extends Controller
{
    function principal(){
        return view('pagina-principal');
    }

    function sobre(){
        return view('sobre');
    }
    function administração(){
        return view('administracao');
    }
    function contato(){
        return view('contato');
    }
    function meioAmbiente(){
        return view('meio-ambiente');
    }
    function desenvolvimento(){
        return view('desenvolvimento-sistemas');
    }



}


