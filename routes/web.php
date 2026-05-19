<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
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

Route::get('/', [App\Http\Controllers\Principal::class, 'principal']);

Route::prefix('/aluno',)->group(function (){
    Route::get('/index', [App\Http\Controllers\AlunoController::class, 'index'])->name("aluno.index");
    Route::post('/create', [App\Http\Controllers\AlunoController::class, 'create'])->name("aluno.add");
    Route::get('/list', [App\Http\Controllers\AlunoController::class, 'list'])->name("aluno.select");
    Route::post('/update', [App\Http\Controllers\AlunoController::class, 'update'])->name("aluno.update");
    Route::post('/delete', [App\Http\Controllers\AlunoController::class, 'delete'])->name("aluno.del");
});



