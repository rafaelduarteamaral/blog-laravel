<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
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
                $path = $req->file('imagem')->store('', 'imagemPublicacao');
            }

            $produto = new Produtos();
                $produto->produto = $nome_prod;
                $produto->descricao = $descricao;
                $produto->categoria = $categoria;
                $produto->texto_prod = $texto_prod;
                $produto->imagem = $path;
                $produto->save();
                return view('admin_produtos');

        }
    }


    public function getCategoria(){
        $data = Categoria::all();
        return view('admin_produtos', ['categoria'=>$data]);
    }
    
    public function buscarProdutos(){
        $data = Produtos::all();
        $data2 = Categoria::all();
        return view('catalogo', ['catalogo'=>$data, 'categoria'=>$data2]);
    }

    public function buscarProdutosTabela(){
        $data = Produtos::all();
        return view('produtos_cadastrados', ['produtos'=>$data]);
    }

    public function deletarProduto($id){
        $id = Produtos::findorfail($id);
        $id->delete();
        return redirect('produtos_cadastrados');
    }

    public function getProduto($id){
        $data = Produtos::where('id', $id)->get();
        return view('produtos', ['produtos'=>$data]);
    }

}
