<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    //
    public function index(Request $request) {
        $erro = $request->get('erro');
        return view ('welcome', ['titulo' => 'Login', 'erro' => $erro]);
    }

    //
    public function autenticar(Request $request) {
        //
        $regras = [
            'usuario' => 'email',
            'senha' => 'required'
        ];

        //
        $feedback = [
            'usuario.email' => 'E-mail inválido!',
            'senha.required' => 'Senha obrigatória!'
        ];

        $request->validate($regras, $feedback);

        $email = $request->usuario;
        $password = $request->senha;

        $user = new User();

        $usuario = $user->where('email', $email)->where('password', $password)->get()->first();

        if (isset($usuario->email)) {
            session_start();
            $_SESSION['usuario'] = $usuario->email;
            return redirect()->route('listaPessoas');
        } else {
            return redirect()->route('welcome', ['erro' => 'Dados inválidos.']);
        }
    }

    
    public function logout(Request $request) {        

        unset($_SESSION['usuario']);
        return redirect()->route('welcome', ['erro' => 'Usuário desconectado.']);
        
    }
}
