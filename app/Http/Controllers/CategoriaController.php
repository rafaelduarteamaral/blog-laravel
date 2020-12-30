<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function categoria(Request $req){
                
        if($req->has('categoria')){
            $categoria         =    $req->input('categoria'); 

                $categorias = new Categoria();
                $categorias->nome = $categoria;
                $categorias->save();
                return view('adminProdutos');
        }
    }
}
