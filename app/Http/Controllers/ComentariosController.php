<?php

namespace App\Http\Controllers;

use App\Models\Comentarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ComentariosController extends Controller
{
    public function comentario(Request $req){
                
        if($req->has('comentar')){
            $texto          =    $req->input('comentar');
            $id = Auth::id(); 

                $comentario = new Comentarios();
                $comentario->comentario = $texto;
                $comentario->id_pessoa = $id;
                $comentario->save();
                return view('bookProduct');
        }
    }
}
