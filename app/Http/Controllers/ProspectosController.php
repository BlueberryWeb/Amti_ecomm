<?php

namespace App\Http\Controllers;

use App\Models\Envios;
use App\Models\Pedidos;
use App\Models\Productos;
use App\Models\Prospectos;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ProspectosController extends Controller
{

    public function __invoke()
    {
      return redirect()->back();
    }

    public function agregarProspecto(Request $request){
        // return response()->json($request);
       
        $validator = Validator::make($request->all(), [
            'fullName' => 'required | string |max:250',
            'phone' => 'required | string |max:250',
        ]);

        if($validator->fails()){
            $message = 'error_rules:' . $validator->errors()->getMessages();
            return response()->json($message);
        }

        try{
            // -->Captura en la tabla Prospectos <-- //
            $prospecto = new Prospectos();
            $prospecto->nombre = $request->fullName;
            $prospecto->telefono = $request->phone;
            $prospecto->origen = 'Pagina';
            $prospecto->estatus = 'No contactado';
            $prospecto->save();

            return response()->json('Prospecto Almacenado');
        }
        catch(\Exception $e){
            return response()->json('No fue posible almacenar tu registro');
        }

    }
}