<?php

namespace App\Http\Controllers;

use App\Models\Envios;
use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function __invoke()
    {
        $productos = Productos::all();
        $envios = Envios::all();

        return view('Portal.Productos.productos', compact('productos', 'envios'));
    }
}
