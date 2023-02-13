<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    use HasFactory;
    protected $fillable = [
       'estatus',
       'factura',

       'id_prospecto',
       'id_factura',
       'direccion',
       'pais',
       'sexo',
       'estatura',
       'color_ojos',
       'color_cabello',

       'id_envio',
       'nombre',
       'telefono',
       'correo',
       'calle',
       'ciudad',
       'cp',
       'instrucciones',

       'frente_ine',
       'vuelta_ine',
       'frente_licencia',
       'vuelta_licencia',
       'fotografia_personal',  

       'id_producto',
       'description',
       'tarjeta',
       'tarjeta_name',
       'pago',
       'total'
    ];

    protected $table = 'pedidos';

    public function scopeExitosos($query){
        
        return $query->WhereIn("estatus",['Exitoso', 'En Ruta', 'En validación']);
    }

    public function scopeAsignados($query){
        
        return $query->join("pedidos_vendedores","pedidos_vendedores.id_pedido", "=", "pedidos.id");
    }

    public function scopeNoAsignados($query){
            return $query->leftjoin("pedidos_vendedores","pedidos_vendedores.id_pedido", "=", "pedidos.id")
            ->whereNull('pedidos_vendedores.id_pedido');
    }

    public function scopeMes($query, $inicio, $fin){
        
        return $query->where('created_at', '>=', $inicio)->where('created_at', '<=' , $fin);
    }

    public function pedidoFactura(){
        return $this->hasOne(Facturacion::class, 'id_pedido', 'id');
    }
}
