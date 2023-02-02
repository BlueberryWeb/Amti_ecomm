<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class procesoCompraController extends Controller
{
    public function __invoke(){
        return view('Flujo.procesoCompra');
    }
}
