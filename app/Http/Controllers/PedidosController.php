<?php

namespace App\Http\Controllers;

use App\Models\Envios;
use App\Models\Facturacion;
use App\Models\Pedidos;
use App\Models\Productos;
use App\Models\Prospectos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PedidosController extends Controller
{
    public function _invoke() {
        //
    }


    public function agregarPedido(Request $request){
        // dd($request);
        // $validator = Validator::make($request->all(), [
        //     "vigencia" => 'required | string',
        //     "pais" => 'required | string',
        //     "estatura" => 'required | string',
        //     "medida" => 'required | string',
        //     "sexo" => 'required | string',
        //     "colorCabello" => 'required | string',
        //     "calle" => 'required | string',
        //     "colonia" => 'required | string',
        //     "numExterior" => 'required | string',
        //     "ciudad" => 'required | string',
        //     "estado" => 'required | string',
        //     "nombreEnvio" => 'required | string',
        //     "telefonoEnvio" => 'required | string',
        //     "correoEnvio" => 'required | string',
        //     "calleEnvio" => 'required | string',
        //     "coloniaEnvio" => 'required | string',
        //     "numeroExtEnvio" => 'required | string',
        //     "ciudadEnvio" => 'required | string',
        //     "estadoEnvio" => 'required | string',
        //     "instrucciones" => 'required | string',
        //     "tipoEnvio" => 'required | string',
        //     "razonSocial" => 'required | string',
        //     "rfc" => 'required | string',
        //     "calleFactura" => 'required | string',
        //     "coloniaFactua" => 'required | string',
        //     "numExteriorFactura" => 'required | string',
        //     "cpFactutra" => 'required | string',
        //     "ciudadFactura" => 'required | string',
        //     "estadoFactura" => 'required | string',
        //     "paisFactura" => 'required | string',
        //     "emailFactura" => 'required | string',
        //     "telefonoFactura" => 'required | string',
        //     "cfdi" => 'required | string',
        // ]);

        // if($validator->fails()){
        //     dd($validator->errors()->getMessages());
        //     return redirect()->back()
        //     ->with('error_rules', $validator->errors()->getMessages())
        //     ->withInput();
        // }

        try{
            $imagen = $request->file('identificacionFrente')->store('public/imagenes');
            $urlIdentificacionFrente = Storage::url($imagen);
            $imagen = $request->file('identeificacionVuelta')->store('public/imagenes');
            $urlIdentificacionVuelta = Storage::url($imagen);

            $imagen = $request->file('licenciaFrente')->store('public/imagenes');
            $urlLicenciaFrente = Storage::url($imagen);
            $imagen = $request->file('licenciaVuelta')->store('public/imagenes');
            $urlLicenciaVulta = Storage::url($imagen);

            $imagen = $request->file('imgPersonalFrente')->store('public/imagenes');
            $urlPersonalFrente = Storage::url($imagen);
            $imagen = $request->file('imgPersonalVuelta')->store('public/imagenes');
            $urlPersonalVuelta = Storage::url($imagen);

            $imagen = $request->file('imgFirma')->store('public/imagenes');
            $urlFirma= Storage::url($imagen);

            $pedidos = new Pedidos();
            $pedidos->estatus = 'Exitoso';
            $pedidos->factura = $request->factura;
            $ultimoProspecto = Prospectos::latest('id')->first();
            $pedidos->id_prospecto = $ultimoProspecto->id;
            $pedidos->direccion = $request->calle .  ' #' . $request->numExterior . ' ' . $request->colonia;
            $pedidos->pais = $request->pais;
            $pedidos->sexo = $request->sexo;
            $pedidos->estatura = $request->estatura;
            $pedidos->tipo_medida = $request->medida;
            $pedidos->color_ojos = $request->color_ojos;
            $pedidos->color_cabello = $request->colorCabello;
            $id_envio = Envios::where('nombre', $request->tipoEnvio)->first();
            $pedidos->id_envio = $id_envio->id;
            $pedidos->nombre = $request->nombreEnvio;
            $pedidos->telefono = $request->telefonoEnvio;
            $pedidos->correo = $request->correoEnvio;
            $pedidos->calle = $request->calleEnvio;
            $pedidos->ciudad = $request->ciudadEnvio;
            $pedidos->instrucciones = $request->instrucciones;
            $pedidos->frente_ine = $urlIdentificacionFrente;
            $pedidos->vuelta_ine = $urlIdentificacionVuelta;
            $pedidos->frente_licencia = $urlLicenciaFrente;
            $pedidos->vuelta_licencia = $urlLicenciaVulta;
            $pedidos->personal_frente = $urlPersonalFrente;
            $pedidos->personal_vuelta = $urlPersonalVuelta;
            $pedidos->fotografia_firma = $urlFirma;
            $id_producto = Productos::where('vigencia', $request->vigencia)->first();
            $pedidos->id_producto = $id_producto->id;
            $pedidos->description = "";
            $pedidos->tarjeta = "";
            $pedidos->tarjeta_name = "";
            $pedidos->pago = 0;
            $pedidos->total = 0;
            $pedidos->save();

            // return redirect()->route('checkout');
        }
        catch(\Exception $e){
            return redirect()->back()->with('error', 'Error en la alta del pedido.');
        }

        if($request->factura == 'Si'){
            try{
                // dd('dentro');
                $imagen = $request->file('constancia_fiscal')->store('public/imagenes');
                $url = Storage::url($imagen);
    
                $factura = new Facturacion();
                $ultimoPedido = Pedidos::latest('id')->first();
                $factura->id_pedido = $ultimoPedido->id;
                $ultimoProspecto = Prospectos::latest('id')->first();
                $factura->id_prospecto = $ultimoProspecto->id;
                $factura->razon_social = $request->razonSocial;
                $factura->rfc = $request->rfc;
                $factura->calle = $request->calleFactura;
                $factura->colonia = $request->coloniaFactura;
                $factura->numExterior = $request->numExteriorFactura;
                $factura->numInterior = $request->numInteriorFactura;
                $factura->cp = $request->cpFactutra;
                $factura->ciudad = $request->ciudadFactura;
                $factura->estado = $request->estadoFactura;
                $factura->pais = $request->paisFactura;
                $factura->correo_electronico = $request->emailFactura;
                $factura->telefono = $request->telefonoFactura;
                $factura->cfdi = $request->cfdi;
                $factura->regimen_fiscal = $request->regimen_fiscal;
                $factura->constancia_fiscal = $url;
                $factura->save();
    
                return redirect()->route('checkout');
            }
            catch(\Exception $e){
                dd($e);
                return redirect()->back()->with('error', 'Error en la alta del pedido.');
            }
        }
    }
}
