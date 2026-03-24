<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal extends Controller
{
    function principal(){
        echo 'Página Principal';
    }

    function somar(int $p1, int $p2){
       // echo "$p1 + $p2 = " . ($p1 + $p2);
       return view('somar',['p1'=>$p1, 'p2'=>$p2]);
    }

    function produtos(){
        $produtos = [
            "produto1" => ["id"=>1, "nome"=>"computador", "preco"=>100],
            "produto2" => ["id"=>2, "nome"=>"teclado", "preco"=>50],
            "produto3" => ["id"=>3, "nome"=>"mouse", "preco"=>30],
            "produto4" => ["id"=>4, "nome"=>"monitor", "preco"=>800],
            "produto5" => ["id"=>5, "nome"=>"impressora", "preco"=>600],
            "produto6" => ["id"=>6, "nome"=>"notebook", "preco"=>2500],
            "produto7" => ["id"=>7, "nome"=>"tablet", "preco"=>1200],
            "produto8" => ["id"=>8, "nome"=>"smartphone", "preco"=>2000],
            "produto9" => ["id"=>9, "nome"=>"caixa de som", "preco"=>150],
            "produto10" => ["id"=>10, "nome"=>"fone de ouvido", "preco"=>120],
            "produto11" => ["id"=>11, "nome"=>"webcam", "preco"=>200],
            "produto12" => ["id"=>12, "nome"=>"microfone", "preco"=>300],
            "produto13" => ["id"=>13, "nome"=>"HD externo", "preco"=>400],
            "produto14" => ["id"=>14, "nome"=>"SSD", "preco"=>350],
            "produto15" => ["id"=>15, "nome"=>"placa de vídeo", "preco"=>1800],
            "produto16" => ["id"=>16, "nome"=>"memória RAM", "preco"=>250],
            "produto17" => ["id"=>17, "nome"=>"fonte", "preco"=>220],
            "produto18" => ["id"=>18, "nome"=>"gabinete", "preco"=>300],
            "produto19" => ["id"=>19, "nome"=>"roteador", "preco"=>180],
            "produto20" => ["id"=>20, "nome"=>"switch", "preco"=>160],
            "produto21" => ["id"=>21, "nome"=>"estabilizador", "preco"=>140],
        ];

        return view('compras',["produtos" => $produtos]);
    }

    
}


