<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class avisoController extends Controller
{
    public function __invoke(){
        return view('Pagina.aviso');
    }
}
