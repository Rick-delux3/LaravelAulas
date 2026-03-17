<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal extends Controller
{
    function principal(){
        echo 'Página Principal';
    }

    function contato(string $nome){
        echo $nome;
    }

    function contatoNomeCompleto(string $nome, string $sobrenome){
        echo "O contato é $nome $sobrenome";
    }

    function contatoMensagem(string $nome, string $sobrenome, string $mensagem){
        echo "O contato $nome $sobrenome enviou uma $mensagem";

    }
    function contatoTelefone(string $nome, string $sobrenome, string $mensagem, string $telefone, string $email = "E-mail não informado"){
        echo "O contato $nome $sobrenome enviou uma mensagem:";
        echo "<h1>$mensagem</h1> ";
        echo "Telefone: $telefone ";
        echo "E-mail: $email ";
    }
}


