<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class comoFuncionaController extends Controller
{
    public function __invoke(){
        return view('Pagina.comoFunciona');
    }
}
