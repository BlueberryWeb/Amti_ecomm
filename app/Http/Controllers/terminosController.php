<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class terminosController extends Controller
{
    public function __invoke(){
        return view('Pagina.terminos');
    }
}
