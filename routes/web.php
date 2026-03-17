<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
use App\Http\Controllers\Principal;
use App\Http\Controllers\Sobre;
use App\Http\Controllers\Contato;
use App\Http\Controllers\Cursos;
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

Route::get('/', [Principal::class, 'index'])->name('index');
Route::get('/Sobre', [Sobre::class, 'sobre'])->name("sobre");
Route::get('/Contato', [Contato::class, 'contato'])->name("contato");
Route::get('/DesenvSistem', [Cursos::class, 'desenvSistemas'])->name("DS");
Route::get('/MeioAm', [Cursos::class, 'meioAmbiente'])->name("am");
Route::get('/Mec', [Cursos::class, 'mecatronica'])->name("mec");
Route::get('/Adm', [Cursos::class, 'adm'])->name("adm");










