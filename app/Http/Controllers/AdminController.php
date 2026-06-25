<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;




class AdminController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function add(Request $data) {

     $validador = Validator::make(
            $data->all(),
            [
                'nome' => 'required|min:3|max:255',
                'email' => 'required|email|max:255',
                'telefone' => 'required|min:10|max:20',
                'cpf' => 'required|min:11|max:14',
                'usuario' => 'required|min:3|max:255',
                'status' => 'required',
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

                'cpf.required' => 'O CPF é obrigatório.',
                'cpf.min' => 'O CPF deve conter no mínimo 11 caracteres.',
                'cpf.max' => 'O CPF deve conter no máximo 14 caracteres.',

                'usuario.required' => 'O usuário é obrigatório.',
                'usuario.min' => 'O usuário deve conter no mínimo 3 caracteres.',
                'usuario.max' => 'O usuário deve conter no máximo 255 caracteres.',

                'status.required' => 'O status é obrigatório.',
            ]
        );

        if ($validador->fails()) {
            return redirect()->route('admin.index')
                ->withErrors($validador)
                ->withInput();
        }
        
        $admin = new AdminModel();
        $admin::create($data->all());

        $admins = new AdminModel();

        return view('admin.index', ['success' => 'Cadastrado!', 'admins' => $admins::all()]);
    }

    public function remove(string $id)
    {
        $admin = new AdminModel();

        $admin::destroy($id);

        return view('admin.index', ['success' => 'Removido!', 'admins' => $admin::all()]);
    }

    public function atualizar(string $id)
    {
        $admin = new AdminModel();

        $admin = $admin->find($id);

        return view('admin.atualizar', ['admin' => $admin]);


    }

    public function save(Request $request)
    {
        $admin = new AdminModel();

        $admin = $admin::find($request->id);

        $admin->update($request->all());

        return view('admin.index', ['success' => 'Atualizado com sucesso!!', 'admins' => $admin::all()]);
    }
}
