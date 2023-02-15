<?php

namespace App\Http\Controllers;

use App\Models\Pedidos;
use App\Models\Pedidos_vendedores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Pedidos_VendedoresController extends Controller
{
    public function agregar_Pedido_Vendedor(Request $request)
    {

        try {

            $nuevo_PedidoVendedor = new Pedidos_vendedores();
            $nuevo_PedidoVendedor->id_vendedor = $request->vendedor;
            $nuevo_PedidoVendedor->id_pedido = $request->pedido;
            $nuevo_PedidoVendedor->save();
            return redirect()->back()->with('success', 'Asignación realizada correctamente.');

        } catch (\Exception $e) {

            return redirect()->back()
                ->with('error', 'Error en la alta del vendedor.');
                
        } 
    }

    public function editar_Pedido_Vendedor(Request $request, $id)
    {

        try {

            $editar_PedidoVendedor = Pedidos_vendedores::find($id);
            $editar_PedidoVendedor->id_vendedor = $request->vendedor;
            $editar_PedidoVendedor->save();
            return redirect()->back()->with('success', 'Asignación realizada correctamente.');

        } catch (\Exception $e) {

            return redirect()->back()
                ->with('error', 'Error al editar vendedor.');
                
        } 
    }
}
