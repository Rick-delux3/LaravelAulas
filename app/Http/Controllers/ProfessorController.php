<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProfessorModel;
use Illuminate\Support\Facades\Validator;


class ProfessorController extends Controller
{
    public function index() {
        return view('professor.index');
    }

    public function add(Request $data) {

        $validador = Validator::make(
            $data->all(),
            [
                'nome' => 'required|min:3|max:255',
                'email' => 'required|email|max:255',
                'telefone' => 'required|min:10|max:20',
            ],
            [
                'nome.required' => 'O nome é obrigatório.',
                'nome.min' => 'O campo nome deve conter no mínimo 3 caracteres.',
                'nome.max' => 'O campo nome deve conter no máximo 255 caracteres.',

                'email.required' => 'O e-mail é obrigatório.',
                'email.email' => 'Digite um e-mail válido.',
                'email.max' => 'O e-mail deve conter no máximo 255 caracteres.',

                'telefone.required' => 'O telefone é obrigatório.',
                'telefone.min' => 'O telefone deve conter no mínimo 10 caracteres.',
                'telefone.max' => 'O telefone deve conter no máximo 20 caracteres.',
            ]
        );

        if ($validador->fails()) {
            return redirect()->route('professor.index')
                ->withErrors($validador)
                ->withInput();
        }
        
        $prof = new ProfessorModel();
        $prof::create($data->all());


        return view('professor.index', ['success' => 'Cadastrado!', 'profs' => $prof::all()]);
    }

    public function remove(string $id)
    {
        $prof = new ProfessorModel();

        $prof::destroy($id);

        return view('professor.index', ['success' => 'Removido!', 'profs' => $prof::all()]);

    }

    public function atualizar(string $id)
    {
        $prof = new ProfessorModel();
        $prof = $prof->find($id);

        return view('professor.atualizar', [ 'prof' => $prof]);

    }

    public function save(Request $request)
    {
        $prof = new ProfessorModel();

        $prof = $prof::find($request->id);

        $prof->update($request->all());

        return view('professor.index', ['success' => 'Atualizado!', 'profs' => $prof::all()]);

    }
}
