<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aluno extends Controller
{
    function show(){
        $alunos = [
           (Object)['nome' => 'Diogo', 'telefone' => '123', 'email' => 'diogo@hotmail.com'], 
            (Object)['nome' => 'João', 'telefone' => '7712', 'email' => 'seleide@hotmail.com'], 
            (Object)['nome' => 'Kaká', 'telefone' => '4121', 'email' => 'Kaka@hotmail.com'] 
        ];

        return view('ALuno', compact('alunos'));
    }
}
