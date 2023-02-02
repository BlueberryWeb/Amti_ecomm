<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cookiesController extends Controller
{
    public function __invoke(){
        return view('Pagina.cookies');
    }
}
