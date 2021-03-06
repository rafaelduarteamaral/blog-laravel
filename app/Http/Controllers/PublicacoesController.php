<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\Publicacoes;
use Illuminate\Http\Request;

class PublicacoesController extends Controller
{
    public function inserir(Request $req){
                
        if($req->has('titulo')){
            $titulo         =    $req->input('titulo');
            $descricao      =    $req->input('descricao');
            $texto          =    $req->input('texto');

            if ($req->hasFile('imagem')) {
                $path = $req->file('imagem')->store('', 'imagem');
            }

            $publicacao = new Publicacoes();
                $publicacao->titulo = $titulo;
                $publicacao->descricao = $descricao;
                $publicacao->texto = $texto;
                $publicacao->imagem = $path;
                $publicacao->save();
                return view('admin_publicacoes');
        }
    }



    public function getPublicacoes(){
        $data = Publicacoes::all();
        return view('index', ['publicacoes'=>$data]);
    }

    public function buscarpublicacoesTabela(){
        $data = publicacoes::all();
        return view('publicacoes_cadastradas', ['publicacoes'=>$data]);
    }

    public function deletarPublicacao($id){
        $id = publicacoes::findorfail($id);
        $id->delete();
        return redirect('publicacoes_cadastradas');
    }

    public function editPub($id)
    {
        $publicacoes = publicacoes::where('id', $id)->get();
        return view('editar_publicacao', ['publicacoes' => $publicacoes]);
    }

    public function updatePub(Request $req, $id)
    {
        $publicacoes = publicacoes::where('id', $id)->first();

        $publicacoes->titulo = $req['titulo'];
        $publicacoes->descricao = $req['descricao'];
        $publicacoes->texto = $req['texto'];

        if ($req->hasFile('imagem')) {
            $path = $req->file('imagem')->store('', 'imagemPublicacao');
        }

        $publicacoes->imagem = $path;
        $publicacoes->update();


        return redirect()->back();
    }
}