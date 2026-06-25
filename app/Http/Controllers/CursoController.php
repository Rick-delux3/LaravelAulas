<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CursoModel;
use Illuminate\Support\Facades\Validator;




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
                    'periodo' => 'required|min:3|max:50',
                ],
                [
                    'nome.required' => 'O nome do curso é obrigatório.',
                    'nome.min' => 'O campo nome deve conter no mínimo 3 caracteres.',
                    'nome.max' => 'O campo nome deve conter no máximo 255 caracteres.',

                    'periodo.required' => 'O período é obrigatório.',
                    'periodo.min' => 'O campo período deve conter no mínimo 3 caracteres.',
                    'periodo.max' => 'O campo período deve conter no máximo 50 caracteres.',
                ]
            );

        if ($validador->fails()) {
            return redirect()->route('curso.index')
                ->withErrors($validador)
                ->withInput();
        }
        
        $curso = new CursoModel();
        $curso::create($data->all());

        $cursos = new CursoModel();

        return view('curso.index', ['success' => 'Cadastrado!', 'cursos' => $cursos::all()]);
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

        $curso = $curso->find($id);

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
