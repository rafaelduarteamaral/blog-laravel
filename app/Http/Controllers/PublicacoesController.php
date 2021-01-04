<?php

namespace App\Http\Controllers;

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
                $path = $req->file('imagem')->store('public/publicacoes');
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
}