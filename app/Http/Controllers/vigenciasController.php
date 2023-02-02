<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vigenciasController extends Controller
{
    public function __invoke(){
        return view ('Pagina.vigencias');
    }
}
