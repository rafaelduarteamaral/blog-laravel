<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Produtos;
use App\Models\Categoria;
use App\Models\Comentarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ComentariosController extends Controller
{
    public function comentario(Request $req){
                
        if($req->has('comentar')){
            $texto          =    $req->input('comentar');
            $id_produto     =    $req->input('id');

            $id = Auth::id(); 

                $comentario = new Comentarios();
                $comentario->comentario = $texto;
                $comentario->id_pessoa = $id;
                $comentario->id_produto = $id_produto;
                $comentario->save();
                return redirect('/produtos/'.$id_produto);
        }
        
    }   
     public function buscarCategorias(){
        $data = Categoria::all();
        return view('produtos', ['categoria'=>$data]);
    }

    public function curtidas(){
        $id = Auth::id(); 
            DB::table('comentarios')
            ->where('id_pessoa', $id)
            ->update(['curtidas' => 1]);
    }

}
