<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
use App\Http\Controllers\Principal;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [Principal::class, 'principal'])->name("index");

Route::prefix('publico')->group(function(){
    Route::get('/contato/{nome}', [Principal::class, 'contato']);
    Route::get('/contato/{nome}/{sobrenome}', [Principal::class, 'contatoNomeCompleto']);
    Route::get('/contato/{nome}/{sobrenome}/{mensagem}', [Principal::class, 'contatoMensagem']);
    Route::get('/contato/{nome}/{sobrenome}/{mensagem}/{telefone}/{email?}', [Principal::class, 'contatoTelefone']);
});

Route::fallback(function(){
    echo "A rota acessada não existe!";
    echo "<a href='". route('index') ."'>Voltar</a>";
});




