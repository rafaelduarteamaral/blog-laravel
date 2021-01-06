<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function buscarUsuarios(){
        $data = user::all();
        return view('user', ['usuarios'=>$data]);
    }
    
    public function getUsuarios(){
        $data = auth::user();
        return view('usuarioPerfil', ['usuarios'=>$data]);

    }

    public function updateUsuarios(Request $req){
        $user = User::find(Auth::user()->id);


            $user->name = $req['nome_usuario'];
            $user->email = $req['email_usuario'];
            
            if ($req->hasFile('imagem')) {
                $path = $req->file('imagem')->store('', 'imagemUsuario');
            }
            $user->imagem = $path;

            $user->save();

            return redirect()->back();

     }
    

}
