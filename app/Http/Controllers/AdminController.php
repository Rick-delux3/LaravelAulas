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
                    'nome' => 'required|min:3|max::255',
                    'email'    => 'required|email|max:255|unique:admin,email',
                    'telefone' => 'nullable|string|max:20',
                    'cpf'      => 'required|string|size:11|unique:admin,cpf', 
                    'usuario'  => 'required|string|max:50|unique:admin,usuario',
                    'status'   => 'required|integer', 
                    'senha'    => 'required|string|min:6', 

                ],
                [
                    'nome.required' => 'o nome é obrigatório',
                    'nome.max' => 'O campo nome deve conter no mínimo 3 caracteres.',
                    'nome.min' => 'O campo nome deve conter no máximo 255 caracteres.',
                    'email.required'=> 'O e-mail é obrigatório.',
                    'email.unique'  => 'Este e-mail já está em uso.',
                    'cpf.required'  => 'O CPF é obrigatório.',
                    'cpf.unique'    => 'Este CPF já está cadastrado.',
                    'usuario.required' => 'O nome de usuário é obrigatório.',
                    'senha.required'=> 'A senha é obrigatória.',
                    'senha.min'     => 'A senha deve ter pelo menos 6 caracteres.',
                ]
                );

        if($validador->fails()){
            return redirect()->route('admin.index')->withErrors($validador)->withInput();
        }
        
        $admin = new AdminModel();
        $admin::create($data->all());

        $admins = new AdminModel();

        return view('admin.index', ['success' => 'Cadastrado!', 'admins' => $alunos::all()]);
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
