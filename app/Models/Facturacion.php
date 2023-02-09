<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facturacion extends Model
{
    use HasFactory;

    protected $fillable = [
        
        "razon_social",
        "id_pedido",
        "razon_social",
        "rfc",
        "calle",
        "colonia",
        "numExterior",
        "cp",
        "ciudad",
        "estado",
        "pais",
        "correo_electronico",
        "telefono",
        "cfdi",
        "regime_fiscal",
        "constancia_fiscal",
    ];

    protected $table = 'facturacion';

    public function pedido(){
        return ;
    }

    public function prospecto(){
        return ; 
    }
}
