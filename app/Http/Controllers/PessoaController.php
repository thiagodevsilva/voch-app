<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    //
    public function index() {
        $query = DB::table('person')->get();

        return view('pessoas.listar', ['titulo' => 'Pessoas', 'query' => $query]);
    }

    //
    public function formInclusao() {
        return view('pessoas.incluir', ['titulo' => 'Nova pessoa']);
    }

    //
    public function addPessoa(Request $request) {
        $nome = $request->nome;
        $idade = $request->idade;

        if ($nome != '' && $idade != '') {
            DB::insert("insert into person (id_user, name, age) VALUES (0, '$nome', '$idade')");
            return view('pessoas.incluir', ['msg' => 'Registro incluído com sucesso!']);
        } else {
            return view('pessoas.incluir', ['msg' => 'Nome e idade são obrigatórios']);
        }        
    }

    //
    public function editar(Request $request) {

        $query = DB::table('person')->where('id', $request->id)->get();

        return view('pessoas.editar', ['dados' => $query]);               
    }

    //
    public function update(Request $request) {
        $id = $request->id;
        $nome = $request->nome;
        $idade = $request->idade;

        if ($nome != '' && $idade != '') {
            DB::update("UPDATE person SET name = '$nome', age = '$idade' WHERE id = $id");
            return view('pessoas.editar', ['msg' => 'Registro atualizado com sucesso!']);
        } else {
            return view('pessoas.editar', ['msg' => 'Nome e idade são obrigatórios']);
        }        
    }

     //
     public function excluir(Request $request) {

        DB::delete("DELETE FROM person WHERE id = $request->id");
        $query = DB::table('person')->get();

        return view('pessoas.listar', ['msg' => 'Registro excluído', 'query' => $query]);               
    }

}
