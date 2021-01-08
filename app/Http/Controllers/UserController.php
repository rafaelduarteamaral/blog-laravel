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

            if($req['nome_usuario']){
                $user->name = $req['nome_usuario'];
            } else {
                $user->name = $user->name;
            }
            if($req['email_usuario']){
                $user->email = $req['email_usuario'];
            } else {
                $user->email = $user->email;
            }
            if ($req->hasFile('imagem')) {
                $path = $req->file('imagem')->store('', 'imagemUsuario');
                $user->imagem = $path;
            }
            else {
                $user->imagem = $user->imagem;
            }

            $user->update();

            return redirect()->back();

     }
    

}
