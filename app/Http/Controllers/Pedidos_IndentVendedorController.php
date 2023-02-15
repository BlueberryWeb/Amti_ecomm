<?php

namespace App\Http\Controllers;

use App\Models\Comentarios;
use App\Models\Pedidos;
use App\Models\Pedidos_vendedores;
use App\Models\Productos;
use App\Models\Prospectos;
use App\Models\User;
use App\Models\Vendedores;
use Illuminate\Http\Request;

class Pedidos_IndentVendedorController extends Controller
{
    public function __invoke()
    {
        $pedidos = Pedidos::Asignados()->get([
            'pedidos.id',
            'pedidos.id_prospecto',
            'pedidos.id_producto',
            'pedidos.estatus',
        ]);
        
        $ped_vendedores = Pedidos_vendedores::all();
        $todosVendedores = Vendedores::all();
        $prospectos = Prospectos::all();
        $productos = Productos::all();
        $comentarios = Comentarios::all();
        $usuarios = User::all();

        return view('Portal.Pedidos.Identificado_vendedor.pedidos_ident-vendedor', compact('pedidos', 'ped_vendedores', 'todosVendedores', 'productos', 'comentarios', 'usuarios', 'prospectos'));
    }
}
