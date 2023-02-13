<?php

namespace App\Http\Controllers;

use App\Models\Comentarios;
use App\Models\Envios;
use App\Models\Facturacion;
use App\Models\Pedidos;
use App\Models\Pedidos_vendedores;
use App\Models\Productos;
use App\Models\Prospectos;
use App\Models\User;
use App\Models\Vendedores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DetallesPedidosController extends Controller
{
    public function __invoke($id)
    {
        $pedido = Pedidos::find($id);
        $prospecto = Prospectos::where('id', $pedido->id_prospecto)->first();
        $envio = Envios::select('nombre')->where('id', $pedido->id_envio)->first();
        $producto = Productos::select('vigencia')->where('id', $pedido->id_producto)->first();
        $comentarios = Comentarios::where('concepto', 'pedidos')->where('id_delConcepto', $id)->get();
        $usuarios = User::all();
        $vendedor_pedido = Pedidos_vendedores::where('id_pedido', $id)->first();
        $todosVendedores = Vendedores::all();
        $factura = $pedido->pedidoFactura()->first();
/*         $vendedor = Vendedores::where('id', $vendedor_pedido->id_vendedor)->first(); */
        return view('Portal.Pedidos.components.detalles_pedidos', compact('pedido', 'prospecto', 'envio', 'producto', 'comentarios', 'usuarios', 'vendedor_pedido', 'todosVendedores', 'factura'));
    }

    public function editarEstatusPedido(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'estatus' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->with('errorForm', $validator->errors()->getMessages())
                ->withInput();
        }

        try {

            $editarEstatusPedido = Pedidos::find($id);
            $editarEstatusPedido->estatus = $request->estatus;
            $editarEstatusPedido->save();

            return redirect()->back()->with('success', 'Estatus actualizado correctamente.');

        } catch (\Exception $e) {

            return redirect()->back()
                ->with('error', 'Error en la edición del estatus.');

        } 
    }

    public function factura(Request $request, Facturacion $factura)
    {

        $factura->estatus = $request->estatus;
        $factura->save();
        return redirect()->back()->with('success', 'Estatus de la factura actualizada correctamente.');
    }
    
}
