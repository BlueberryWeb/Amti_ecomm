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
    public function _invoke(Productos $producto) {
   
        
    }


    public function agregarPedido(Request $request){

        try{
            // dd($request);
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
            
            $imagen = $request->file('imgFirma')->store('public/imagenes');
            $urlFirma= Storage::url($imagen);
            
            $pedidos = new Pedidos();
            $pedidos->estatus = 'Exitoso';
            $pedidos->factura = $request->factura;
            $ultimoProspecto = Prospectos::latest('id')->first();
            $pedidos->id_prospecto = $ultimoProspecto->id;
            $pedidos->direccion = $request->calle .  ' #' . $request->numExterior . ' ' . $request->colonia . $request->numInterior != '' ? ' Int. ' . $request->numInterior : '';
            $pedidos->pais = $request->pais;
            $pedidos->sexo = $request->sexo;
            $pedidos->estatura = $request->estatura;
            $pedidos->tipo_medida = $request->medida;
            $pedidos->color_ojos = $request->color_ojos;
            $pedidos->color_cabello = $request->colorCabello;
            $pedidos->frente_ine = $urlIdentificacionFrente;
            $pedidos->vuelta_ine = $urlIdentificacionVuelta;
            $pedidos->frente_licencia = $urlLicenciaFrente;
            $pedidos->vuelta_licencia = $urlLicenciaVulta;
            $pedidos->personal_frente = $urlPersonalFrente;
            $pedidos->fotografia_firma = $urlFirma;
            $envio = Envios::where('nombre', $request->tipoEnvio)->first();
            $pedidos->id_envio = $envio->id;
            $pedidos->nombre = $request->nombreEnvio;
            $pedidos->telefono = $request->telefonoEnvio;
            $pedidos->correo = $request->correoEnvio;
            $pedidos->calle = $request->calleEnvio .  ' #' . $request->numExteriorEnvio . ' ' . $request->coloniaEnvio . $request->numInteriorEnvio != '' ? ' Int. ' . $request->numInteriorEnvio : '';
            $pedidos->ciudad = $request->ciudadEnvio;
            $pedidos->cp = $request->cpEnvio;
            $pedidos->instrucciones = $request->instrucciones;
            $pedidos->sucursal_entrega =  $request->sucursalEntrega;
            $producto = Productos::where('vigencia', $request->vigenciaSent)->first();
            $pedidos->id_producto = $producto->id;
            $pedidos->description = "";
            $pedidos->tarjeta = "";
            $pedidos->tarjeta_name = "";
            $pedidos->pago = 'Indefinido';
            $pedidos->total = (int)str_replace(',', '', $producto->precio) + (int)$envio->precio;
            $pedidos->id_factura = 0;
            $pedidos->save();
            $ultimoPedido = Pedidos::latest('id')->first();

            if( $request->factura == 'No') {
                return redirect()->route('checkout', ['producto' => $producto, 'pedido' => $ultimoPedido]);
            }
        }
        catch(\Exception $e){
            dd($e);
            return redirect()->back()->with('error', 'Error en la alta del pedido.');
        }

        if($request->factura == 'Si'){
            try{
                $documento = $request->file('constancia_fiscal')->store('public/imagenes');
                $url = Storage::url($documento);
    
                $factura = new Facturacion();
                $ultimoPedido = Pedidos::latest('id')->first();
                $factura->id_pedido = $ultimoPedido->id;
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
                $factura->estatus = 'Pendiente';
                $factura->save();
                
                $ultimaFactura = Facturacion::latest('id')->first();
                Pedidos::select('id_factura')->where('id', $ultimoPedido->id)->update(['id_factura' => $ultimaFactura->id]);
 
                return redirect()->route('checkout', ['producto' => $producto, 'pedido' => $ultimoPedido]);
            }
            catch(\Exception $e){
                return redirect()->back()->with('error', 'Error en la alta del pedido.');
            }
        }
    }
}