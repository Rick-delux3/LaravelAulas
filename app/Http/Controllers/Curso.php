<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Curso extends Controller
{
    function show(){
        $cursos = [
           (Object) ['nome' => 'PHP', 'carga_horaria' => 40], 
            (Object) ['nome' => 'JavaScript', 'carga_horaria' => 30], 
            (Object) ['nome' => 'Python', 'carga_horaria' => 50] 
        ];

        return view('curso', compact('cursos'));
    }
}
