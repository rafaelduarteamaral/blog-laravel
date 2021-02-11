<?php

namespace App\Http\Controllers;

use App\Models\produtos;
use Illuminate\Support\Facades\DB;
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
                return view('admin_produtos');
        }
    }

    public function getCategoria(){
        $data = Categoria::all();
        return view('admin_produtos', ['categoria'=>$data]);
    }

    
    public function selectCategoria($nome){
        $users = db::table('categorias as c')
            ->select('p.id', 'p.produto', 'p.categoria', 'p.imagem', 'p.descricao', 'p.texto_prod')
            ->leftJoin('produtos as p', 'c.nome', '=', 'p.categoria')
            ->where('p.categoria', $nome)
            ->get();
        $data = Produtos::all();
        $data2 = Categoria::all();

        return view('categoria', ['categoi'=>$data2, 'catalogo'=>$data, 'categoria'=>$users]);
    }
}