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
            $_SESSION['id'] = $usuarios->id;
            $_SESSION['email'] = $usuarios->email;
            $_SESSION['level'] = $usuarios->level;
            $_SESSION['name'] = $usuarios->name;
            

            if($_SESSION['level'] == 'admin'){
                return view('admin');
            }

            if($_SESSION['level'] == 'normal'){
                return view('books', $_SESSION);
            }
        }
        
        else {
            return view('loginerro');
        }


    }

    public function logout(){
        @session_start();
        @session_destroy();
        return view('login');
    }
}
