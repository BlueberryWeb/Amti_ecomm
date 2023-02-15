<?php

namespace App\Http\Controllers;

use App\Models\Comentarios;
use App\Models\Datos_envios;
use App\Models\Envios;
use App\Models\Pedidos;
use App\Models\Pedidos_vendedores;
use App\Models\Productos;
use App\Models\Prospectos;
use App\Models\User;
use App\Models\Vendedores;
use Illuminate\Http\Request;

class Pedidos_ExitososController extends Controller
{
    public function __invoke()
    {
        $pedidos = Pedidos::Exitosos()->get();
        $ped_vendedores = Pedidos_vendedores::all();
        $todosVendedores = Vendedores::all();
        $prospectos = Prospectos::all();
        $productos = Productos::all();
        $comentarios = Comentarios::all();
        $usuarios = User::all();
        $envios = Envios::all();
        return view('Portal.Pedidos.Exitosos.pedidos_exitosos', compact('pedidos', 'ped_vendedores', 'todosVendedores', 'productos', 'comentarios', 'usuarios', 'prospectos', 'envios'));
    }
}
