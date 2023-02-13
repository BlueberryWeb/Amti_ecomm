<?php

namespace App\Http\Controllers;

use App\Models\Pedidos;
use App\Models\Pedidos_vendedores;
use App\Models\Prospectos;
use App\Models\Vendedores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VendedoresController extends Controller
{
    public function __invoke()
    {
        $todosVendedores = Vendedores::all();
        $pedidos_vendedores = Pedidos_vendedores::all();
        $pedidos = Pedidos::all();
        $prospectos = Prospectos::all();
        return view('Portal.Vendedores.vendedores', compact('todosVendedores', 'pedidos_vendedores', 'pedidos', 'prospectos'));
    }

    public function agregarVendedor(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string',
            'primer_apellido' => 'required|string',
            'color_identificador' => 'required|string',
            'estatus' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->with('errorForm', $validator->errors()->getMessages())
                ->withInput();
        }

        try {

            $nuevoVendedor = new Vendedores();
            $nuevoVendedor->nombre = $request->nombre;
            $nuevoVendedor->primer_apellido = $request->primer_apellido;
            if($request->segundo_apellido)
                $nuevoVendedor->segundo_apellido = $request->segundo_apellido;
            $nuevoVendedor->color_identificador = $request->color_identificador;
            $nuevoVendedor->estatus = $request->estatus;
            $nuevoVendedor->save();

            return redirect()->back()->with('success', 'Vendedor agregado correctamente.');

        } catch (\Exception $e) {

            return redirect()->back()
                ->with('error', 'Error en la alta del vendedor.');
        } 
    }

    public function editarVendedor(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string',
            'primer_apellido' => 'required|string',
            'color_identificador' => 'required|string',
            'estatus' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->with('errorForm', $validator->errors()->getMessages())
                ->withInput();
        }

        try {

            $editarVendedor = Vendedores::find($id);
            $editarVendedor->nombre = $request->nombre;
            $editarVendedor->primer_apellido = $request->primer_apellido;
            if($request->segundo_apellido)
                $editarVendedor->segundo_apellido = $request->segundo_apellido;
            $editarVendedor->color_identificador = $request->color_identificador;
            $editarVendedor->estatus = $request->estatus;
            $editarVendedor->save();

            return redirect()->back()->with('success', 'Vendedor actualizado correctamente.');

        } catch (\Exception $e) {

            return redirect()->back()
                ->with('error', 'Error en la edición del vendedor.');
        } 
    }

    public function eliminarVendedor($id)
    {
        try {
            if(Pedidos_vendedores::where('id_vendedor',$id)->first())
                return redirect()->back()->with('error', 'El vendedor cuenta con pedidos asignados. Edite los pedidos asignados a este vendedor para eliminarlo.');
            $editarVendedor = Vendedores::find($id);
            $editarVendedor->delete();
            return redirect()->back()->with('success', 'Vendedor eliminado correctamente.');

        } catch (\Exception $e) {

            return redirect()->back()
                ->with('error', 'Error al eliminar vendedor.');
        } 
    }
}
