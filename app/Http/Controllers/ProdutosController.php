<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\Models\Comentarios;
use App\Models\Categoria;
use App\Models\produtos;
use Illuminate\Http\Request;
use App\Imports\ProdutosImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
Use App\Document;

class ProdutosController extends Controller
{

    public function index(produtos $produto)
    {
        $produtos = $produto->all();
        return view('editar', ['editar' => $produtos]);
    }

    public function inserir(Request $req)
    {

        if ($req->has('produto_nome')) {
            $nome_prod      =    $req->input('produto_nome');
            $descricao      =    $req->input('descricao');
            $texto_prod     =    $req->input('texto_prod');
            $categoria      =    $req->input('categoria');


            if ($req->hasFile('imagem')) {
                $path = $req->file('imagem')->store('', 'imagemProduto');
            }
            if ($req->hasFile('imagem_2')) {
                $path2 = $req->file('imagem_2')->store('', 'imagemProduto');
            }
            if ($req->hasFile('imagem_3')) {
                $path3 = $req->file('imagem_3')->store('', 'imagemProduto');
            }
            if ($req->hasFile('imagem_4')) {
                $path4 = $req->file('imagem_4')->store('', 'imagemProduto');
            }
            if ($req->hasFile('imagem_5')) {
                $path5 = $req->file('imagem_5')->store('', 'imagemProduto');
            }


            $produto = new Produtos();
            $produto->produto = $nome_prod;
            $produto->descricao = $descricao;
            $produto->categoria = $categoria;
            $produto->texto_prod = $texto_prod;
            $produto->imagem = $path;
            $produto->imagem_2 = $path2;
            $produto->imagem_3 = $path3;
            $produto->imagem_4 = $path4;
            $produto->imagem_5 = $path5;
            $produto->save();
            return view('admin_produtos');
        }
    }


    public function getCategoria()
    {
        $data = Categoria::all();
        return view('admin_produtos', ['categoria' => $data]);
    }

    public function buscarProdutos()
    {
        $data = Produtos::all();
        $data2 = Categoria::all();
        return view('catalogo', ['catalogo' => $data, 'categoria' => $data2]);
    }

    public function buscarProdutosTabela()
    {
        $data = Produtos::all();
        return view('produtos_cadastrados', ['produtos' => $data]);
    }

    public function deletarProduto($id)
    {
        $id = Produtos::findorfail($id);
        $id->delete();
        return redirect('produtos_cadastrados');
    }


    public function getProduto($id)
    {
        $data = Produtos::where('id', $id)->get();
        $estrela = DB::table('comentarios')
        ->where('id_produto', $id)
        ->avg('avaliacoes');



        $comentarios = db::table('comentarios as c')
        ->select('p.id','c.id_pessoa','c.comentario', 'u.name', 'u.imagem', DB::raw('sum(c.avaliacoes) as avaliacoes'), DB::raw('avg(c.avaliacoes) AS media'))
        ->leftJoin('produtos as p', 'p.id', '=', 'c.id_produto')
        ->leftJoin('users as u', 'c.id_pessoa', '=', 'u.id')
        ->where('p.id', $id)
        ->groupBy('p.id', 'c.id_pessoa', 'c.comentario')
        ->get();
        return view('produtos', ['produtos' => $data, 'comentarios' => $comentarios, 'avaliacao' => $estrela]);
    }

    public function edit($id)
    {
        $produto = Produtos::where('id', $id)->get();
        return view('editar', ['editar' => $produto]);
    }

    public function update(Request $req, $id)
    {
        $produto = Produtos::where('id', $id)->first();

        $produto->produto = $req['titulo'] ? $req['titulo'] : $req['titulo'];
        $produto->descricao = $req['descricao'];
        $produto->categoria = $req['categoria'];
        if ($req->hasFile('imagem')) {
            $path = $req->file('imagem')->store('', 'imagemPublicacao');
        }
        if ($req->hasFile('imagem_2')) {
            $path2 = $req->file('imagem_2')->store('', 'imagemPublicacao');
        }
        if ($req->hasFile('imagem_3')) {
            $path3 = $req->file('imagem_3')->store('', 'imagemPublicacao');
        }
        if ($req->hasFile('imagem_4')) {
            $path4 = $req->file('imagem_4')->store('', 'imagemPublicacao');
        }
        if ($req->hasFile('imagem_5')) {
            $path5 = $req->file('imagem_5')->store('', 'imagemPublicacao');
        }
        $produto->imagem = $path;
        $produto->imagem_2 = $path2;
        $produto->imagem_3 = $path3;
        $produto->imagem_4 = $path4;
        $produto->imagem_5 = $path5;
        $produto->texto_prod = $req['texto'];


        $produto->update();


        return redirect()->back();
    }

    public function Pesquisar(Request $req)
    {
      $texto = $req->get('buscar');
      $pesquisa = Produtos::where('produto', 'like', '%'.$texto.'%')
     ->orWhere('produto','like','%'.$texto.'%')
     ->orWhere('produto','like','%'.$texto.'%')
     ->orWhere('id','like','%'.$texto.'%')
     ->orderBy('produto')
     ->paginate(20);

     return view('pesquisar', ['pesquisar' => $pesquisa]);
    }


    public function import() 
    {
        return view('import');
    }
    
    public function importar(Request $req) 
    {
        Excel::import(new ProdutosImport,$req->file);
        
        
        return "Importado";
    }
}
