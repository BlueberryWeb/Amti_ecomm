<?php

namespace App\Http\Controllers;

use App\Models\Pedidos;
use App\Models\Productos;
use Illuminate\Http\Request;

class checkoutController extends Controller
{
    public function __invoke(Productos $producto, Pedidos $pedido){
        return view('flujo.checkout', compact('producto', 'pedido'));
    }
}