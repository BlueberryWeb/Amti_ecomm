<?php

namespace App\Http\Controllers;

use App\Models\Pedidos;
use App\Models\Prospectos;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $startDay = Carbon::now()->startOfMonth()->toDateString();
        $lastDay = Carbon::now()->lastOfMonth()->endOfDay()->toDateString();

        $startLastMonth = Carbon::now()->startOfMonth()->subMonthsNoOverflow()->toDateString();
        $endLastMonth = Carbon::now()->subMonthsNoOverflow()->endOfMonth()->toDateString();

        $gananciaActual = Pedidos::Mes($startDay, $lastDay)->sum('total');
        $gananciaAnterior = Pedidos::Mes($startLastMonth, $endLastMonth)->sum('total');


        $prospectosDelMes = Prospectos::Mes($startDay, $lastDay)->get();
            $ConPros = $prospectosDelMes->count();
        $pedidosDelMes = Pedidos::Mes($startDay, $lastDay)->get();
            $ConPed = $pedidosDelMes->where('estatus', '<>', 'No exitoso')->count();
            $pedidosFinalizadosDelMes = $pedidosDelMes->where('estatus', 'Finalizado')->count();

        $semanas = date("W", strtotime($lastDay))-date("W", strtotime($startDay)) + 1;

        $mediaProspecto = $ConPros / date('d');
        $porcentajeExito = ($ConPed * 100) / 1;
        $mediaPedido = $ConPed / date('d');

        $pedidos = Pedidos::all();
        //Productos
        $plan1 = $pedidos->where('id_producto', 1)->count();
        $plan2 = $pedidos->where('id_producto', 2)->count();
        $plan3 = $pedidos->where('id_producto', 3)->count();
        //Estatus
        $exitosos = Pedidos::Exitosos()->count();
        $noExitosos = $pedidos->where('estatus', 'No exitoso')->count();
        $finalizados = $pedidos->where('estatus', 'Finalizado')->count();
        //Envios del mes
        $estandar = $pedidos->where('id_envio', 1)->count();
        $express = $pedidos->where('id_envio', 2)->count();
        $recoger = $pedidos->where('id_envio', 3)->count();


        return view('dashboard', 
        compact(
            'startDay', 'lastDay', 
            'gananciaActual', 'gananciaAnterior', 
            'ConPros', 'ConPed', 'pedidosFinalizadosDelMes',
            'prospectosDelMes', 'pedidosDelMes',
            'mediaProspecto', 'porcentajeExito', 'mediaPedido',
            'plan1', 'plan2', 'plan3',
            'exitosos', 'noExitosos', 'finalizados',
            'estandar', 'express', 'recoger',
            'semanas'
        ));
    }

}
