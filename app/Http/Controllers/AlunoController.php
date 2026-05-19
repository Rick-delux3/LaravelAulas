<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    public function index(){
        return view('aluno.index');
    }
    public function create(Request $dados, Aluno $aluno){
        //dd($dados->all());
        $inserir = $aluno->create([
            'nome' => $dados['nome'],
            'email' => $dados['email'],
        ]);

        return $inserir;
    }
    public function list(){

    }
    public function update(Request $dados){

    }
    public function delete(Request $dados){

    }
}
