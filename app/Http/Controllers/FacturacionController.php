<?php

namespace App\Http\Controllers;

use App\Models\Facturacion;
use App\Models\Pedidos;
use Illuminate\Http\Request;

class FacturacionController extends Controller
{
    public function __invoke(){
        $pedido = Pedidos::where('id', 2)->first();
        // dd($pedido);

        $factura = $pedido->pedidoFactura()->first();
        dd($factura);
        
    }
}
