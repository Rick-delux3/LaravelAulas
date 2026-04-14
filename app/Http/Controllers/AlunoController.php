<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlunoModel;

class AlunoController extends Controller
{
    public function index() {
        return view('aluno.index');
    }

    public function adicionar(Request $data) {

        AlunoModel::create($data->all());
        return view('aluno.index', ['sucesso' => 'Aluno inserido']);
    }

    public function remover() {

    }

    public function atualizar() {

    }
    public function consultar() {

    }
 }

 