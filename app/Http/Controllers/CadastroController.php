<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function inserir(Request $req){
        if($req->has('name')){
            $nome = $req->input('name');
            $email = $req->input('email');
            $password = $req->input('password');
            $date = $req->input('data_nascimento');

            $usuario = new User();
                $usuario->name = $nome;
                $usuario->email = $email;
                $usuario->password = $password;
                $usuario->date = $date;
                $usuario->level = "normal";
                $usuario->save();
                return view('books');
        }
    }
}
