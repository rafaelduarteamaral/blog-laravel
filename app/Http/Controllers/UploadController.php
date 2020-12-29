<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function inserirImagem(Request $request)
    {   
        $request->file->store('public');
        return "Sucesso!!";
    }
}