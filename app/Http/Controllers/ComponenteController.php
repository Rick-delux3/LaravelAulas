<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ComponenteModel;
use Illuminate\Support\Facades\Validator;


class ComponenteController extends Controller
{


    public function index() {
        return view('componente.index');
    }

    public function add(Request $data) {

        $validador = Validator::make(
            $data->all(),
                [
                    'nome' => 'required|min:3|max::255',
                    'hora_inicio' => 'required|date_format:H:i',
                    'hora_fim' => 'required|date_format:H:i|after:hora_inicio',
                ],
                [
                    'nome.required' => 'O nome é obrigatório.',
                    'nome.min' => 'O campo nome deve conter no mínimo 3 caracteres.',
                    'nome.max' => 'O campo nome deve conter no máximo 255 caracteres.',

                    'hora_inicio.required' => 'A hora de início é obrigatória.',
                    'hora_inicio.date_format' => 'A hora de início deve estar no formato HH:MM.',

                    'hora_fim.required' => 'A hora de fim é obrigatória.',
                    'hora_fim.date_format' => 'A hora de fim deve estar no formato HH:MM.',
                    'hora_fim.after' => 'A hora de fim deve ser maior que a hora de início.',
                ]
                );

        if($validador->fails()){
            return redirect()->route('compo.index')->withErrors($validador)->withInput();
        }
        
        $comp = new ComponenteModel();
        $comp::create($data->all());

        $comps = new ComponenteModel();

        return view('componente.index', ['success' => 'Cadastrado!', 'comps' => $comps::all()]);
    }

    public function remove(string $id)
    {
        $comp = new ComponenteModel();
        $comp::destroy($id);

        return view('componente.index', ['success => Removido com sucesso!', 'comps' => $comp::all()]);

    }

    public function atualizar(string $id)
    {
        $comp = new ComponenteModel();

        $comp = $comp->find($id);

        return view('componente.atualizar', ['comp' => $comp]);

    }

    public function save(Request $request)
    {
        $comp = new ComponenteModel();

        $comp = $comp::find($request->id);

        $comp->update($request->all());

        return view('componente.index', ['success' => 'Atualizado!!' ,'comps' => $comp::all()]);

    }
}
