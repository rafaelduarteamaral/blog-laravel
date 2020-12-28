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
            $imagem         =    $req->input('imagem');
            $categoria      =    $req->input('categoria');

            $produto = new Produtos();
                $produto->produto = $nome_prod;
                $produto->descricao = $descricao;
                $produto->categoria = $categoria;
                $produto->texto_prod = $texto_prod;
                $produto->imagem = $imagem;
                $produto->save();
                return view('adminProdutos');
        }
    }
}
