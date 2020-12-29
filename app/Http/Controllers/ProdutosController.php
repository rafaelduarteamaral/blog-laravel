<?php

namespace App\Http\Controllers;

use App\Models\produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function inserir(Request $req){
                
        if($req->has('produto_nome')){
            $nome_prod      =    $req->input('produto_nome');
            $descricao      =    $req->input('descricao');
            $texto_prod     =    $req->input('texto_prod');
            $categoria      =    $req->input('categoria');

            if ($req->hasFile('imagem')) {
                $path = $req->file('imagem')->store('public');
            }
            $produto = new Produtos();
                $produto->produto = $nome_prod;
                $produto->descricao = $descricao;
                $produto->categoria = $categoria;
                $produto->texto_prod = $texto_prod;
                $produto->imagem = $path;
                $produto->save();
                return view('adminProdutos');
        }
    }
}
