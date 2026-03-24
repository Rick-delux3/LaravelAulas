<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class Principal extends Controller
{
    function principal(){
        echo 'Página Principal';
    }

    function somar(int $p1, int $p2){
        // $soma = ($p1 + $p2);
       

        return view('somar', ['p1' => $p1, 'p2' => $p2]);
    
        // echo "$p1 + $p2 é igual a
        // <h1> $soma </h1>";
    }
    function multiplicar(int $p1, int $p2){
        // $soma = ($p1 + $p2);
       

        return view('somar', ['p1' => $p1, 'p2' => $p2]);
    
        // echo "$p1 + $p2 é igual a
        // <h1> $soma </h1>";
    }
    function subtrair(int $p1, int $p2){
        // $soma = ($p1 + $p2);
       

        return view('somar', ['p1' => $p1, 'p2' => $p2]);
    
        // echo "$p1 + $p2 é igual a
        // <h1> $soma </h1>";
    }
    function dividir(int $p1, int $p2){
        // $soma = ($p1 + $p2);
       

        return view('somar', ['p1' => $p1, 'p2' => $p2]);
    
        // echo "$p1 + $p2 é igual a
        // <h1> $soma </h1>";
    }
    
    function produtos(){
        $produtos =[
            "produto1" => [
                "id" => 1, 
                "nome" => "Computador",
                "preco" => 100
            ],
            "produto2" => [
                "id" => 2, 
                "nome" => "Monitor 24 Polegadas",
                "preco" => 850

            ],
            "produto3" => [
                "id" => 3, 
                "nome" => "Teclado Mecânico",
                "preco" => 250
            ],
            "produto4" => [
                "id" => 4, 
                "nome" => "Mouse Gamer",
                "preco" => 150
            ],
            "produto5" => [
                "id" => 5, 
                "nome" => "Headset Bluetooth",
                "preco" => 320
            ],
            "produto6" => [
                "id" => 6, 
                "nome" => "Webcam Full HD",
                "preco" => 210
            ],
            "produto7" => [
                "id" => 7, 
                "nome" => "Cadeira Ergonômica",
                "preco" => 1200
            ],
            "produto8" => [
                "id" => 8, 
                "nome" => "Mesa Office",
                "preco" => 450
            ],
            "produto9" => [
                "id" => 9, 
                "nome" => "Impressora Laser",
                "preco" => 980
            ],
            "produto10" => [
                "id" => 10, 
                "nome" => "SSD 1TB NVMe",
                "preco" => 540
            ],
            "produto11" => [
                "id" => 11, 
                "nome" => "Memória RAM 16GB",
                "preco" => 400
            ],
            "produto12" => [
                "id" => 12, 
                "nome" => "Roteador Wi-Fi 6",
                "preco" => 670
            ],
            "produto13" => [
                "id" => 13, 
                "nome" => "Microfone Condensador",
                "preco" => 380
            ],
            "produto14" => [
                "id" => 14, 
                "nome" => "HD Externo 2TB",
                "preco" => 420
            ],
            "produto15" => [
                "id" => 15, 
                "nome" => "Suporte para Monitor",
                "preco" => 130
            ],
            "produto16" => [
                "id" => 16, 
                "nome" => "Placa de Vídeo RTX",
                "preco" => 3500
            ],
            "produto17" => [
                "id" => 17, 
                "nome" => "Gabinete Gamer",
                "preco" => 480
            ],
            "produto18" => [
                "id" => 18, 
                "nome" => "Fonte 750W 80 Plus",
                "preco" => 520
            ],
            "produto19" => [
                "id" => 19, 
                "nome" => "Cooler Processador",
                "preco" => 190
            ],
            "produto20" => [
                "id" => 20, 
                "nome" => "Hub USB-C",
                "preco" => 110
            ],
            "produto21" => [
                "id" => 21, 
                "nome" => "Estabilizador de Energia",
                "preco" => 260
            ],

        ];

        return view('compras', ["produtos" => $produtos]);
    }
    
}


