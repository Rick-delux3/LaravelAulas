<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CursoModel;



class CursoController extends Controller
{

    
    public function index() {
        return view('curso.index');
    }

    public function add(Request $data) {
        
        $validador = Validator::make(
            $data->all(),
                [
                    'nome' => 'required|min:3|max:255',
                ],
                [
                    'nome.required' => 'o nome é obrigatório',
                    'nome.max' => 'O campo nome deve conter no mínimo 3 caracteres.',
                    'nome.min' => 'O campo nome deve conter no máximo 255 caracteres.',
                ]
                );

        if($validador->fails()){
            return redirect()->route('aluno.index')->withErrors($validador)->withInput();
        }
        
        $aluno = new AlunoModel();
        $aluno::create($data->all());

        $alunos = new AlunoModel();

        return view('aluno.index', ['success' => 'Cadastrado!', 'alunos' => $alunos::all()]);
    }

    public function remove(string $id)
    {
        $curso = new CursoModel();

        $curso::destroy($id);

        return view('curso.index', ['success'=> 'Removido!!', 'cursos' => $curso::all()]);
    }

    public function atualizar(string $id)
    {
        $curso = new CursoModel();

        $curso->find($id);

        return view('curso.atualizar', ['curso' => $curso]);


    }

    public function save(Request $request)
    {
        $curso = new CursoModel();

        $curso = $curso::find($request->id);

        $curso->update($request->all());

        return view('curso.index', ['success' => 'Dados Salvos!', 'cursos' => $curso::all()]);
    }
}
