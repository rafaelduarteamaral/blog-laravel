<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;

        $usuarios = user::where('email', '=', "$email")->where('password', '=', "$password")->first();

        if(@$usuarios->id != null){
            @session_start();
            $_SESSION['id_user'] = $usuarios->id;
            $_SESSION['name_user'] = $usuarios->nome;
            $_SESSION['level_user'] = $usuarios->nivel;


            if($_SESSION['level_user'] == 'admin'){
                return view('painel-admin.index');
            }

            if($_SESSION['name_user'] == 'normal'){
                return view('books');
            }
        }
        else {
            echo "<script language='javascript'> windows.alert('Dados Incorretos!') </script>";
            return view('books');
        }
    }

    public function logout(){
        @session_start();
        @session_destroy();
        return view('login');
    }
}
