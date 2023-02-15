<?php

namespace App\Http\Controllers;

use App\Models\Comentarios;
use App\Models\Pedidos;
use App\Models\Productos;
use App\Models\Prospectos;
use App\Models\User;
use App\Models\Vendedores;
use Illuminate\Http\Request;

class Pedidos_SinAsignarController extends Controller
{
    public function __invoke()
    {
        $pedidos = Pedidos::NoAsignados()->get([
            'pedidos.id',
            'pedidos.id_prospecto',
            'pedidos.id_producto',
            'pedidos.estatus',
        ]);
        
        $productos = Productos::all();
        $todosVendedores = Vendedores::all();
        $comentarios = Comentarios::all();
        $prospectos = Prospectos::all();
        $usuarios = User::all();
        return view('Portal.Pedidos.Sin_asignar.pedidos_sin-asignar', compact('pedidos', 'productos', 'todosVendedores', 'comentarios', 'usuarios', 'prospectos'));
    }
}
