<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PessoaController;
use App\Http\Middleware\LogAcessoMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/editar/{id}', [PessoaController::class, 'editar'])
    ->middleware([LogAcessoMiddleware::class]);

Route::get('/excluir/{id}', [PessoaController::class, 'excluir'])
    ->middleware([LogAcessoMiddleware::class]);

Route::post('/updatePessoa', [PessoaController::class, 'update'])
    ->name('edit.pessoa')
    ->middleware([LogAcessoMiddleware::class]);

Route::post('/addPessoa', [PessoaController::class, 'addPessoa'])
    ->name('add.pessoa')
    ->middleware([LogAcessoMiddleware::class]);

Route::get('/novo', [PessoaController::class, 'formInclusao'])
    ->name('nova.pessoa')
    ->middleware([LogAcessoMiddleware::class]);

Route::get('/logout', [LoginController::class, 'logout'])
    ->middleware([LogAcessoMiddleware::class])
    ->name('deslogar');

Route::get('/pessoas', [PessoaController::class, 'index'])
    ->name('listaPessoas')
    ->middleware([LogAcessoMiddleware::class]);

Route::get('/{erro?}', [LoginController::class, 'index'])->name('welcome');

Route::post('/', [LoginController::class, 'autenticar'])->name('welcome');






