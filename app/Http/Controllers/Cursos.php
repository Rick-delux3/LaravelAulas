<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cursos extends Controller
{
    function desenvSistemas(){
        return view("Desenv-Sistemas");
    }
    function adm(){
        return view("Adiministracao");
    }
    function meioAmbiente(){
        return view("meio-ambiente");
    }
    function mecatec(){
        return view("mecatronica");
    }
}
