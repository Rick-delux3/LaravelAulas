<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Componente extends Controller
{
    function show(){
        $componentes = [
           (Object) ['nome' => 'PHP', 'descricao' => 'Linguagem de programação para desenvolvimento web'], 
            (Object) ['nome' => 'JavaScript', 'descricao' => 'Linguagem de programação para desenvolvimento web e aplicações'], 
            (Object) ['nome' => 'Python', 'descricao' => 'Linguagem de programação versátil para diversas aplicações'] 
        ];

        return view('componente', compact('componentes'));
    }
}
