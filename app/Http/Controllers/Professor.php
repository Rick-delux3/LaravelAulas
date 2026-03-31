<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Professor extends Controller
{
    function show(){
        $teachers = [
          (Object) ['nome' =>'Marcela', 'email'=> 'marcela12@gmail.com'],  
          (Object) ['nome'=>'Digo', 'email' => 'Digo2@gmail.com'],  
          (Object) ['nome'=>'Samuel', 'email' => 'Muca@gmail.com'],  
          (Object) ['nome'=>'Cazé', 'email' => 'CazéTV@gmail.com']  
        ];

        return view('professor', compact('teachers'));
    }
    }

