<?php

namespace App\Http\Controllers;

use App\Models\Pedidos;

use Illuminate\Http\Request;

class checkoutController extends Controller
{
    public function __invoke(Request $request){
        return view('Flujo.checkout');
    }
}