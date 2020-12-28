<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function session(){
        echo "<h1> Teste Sessão! </h1>";

        

        var_dump(Session::all(), session()->all());
    }
}
