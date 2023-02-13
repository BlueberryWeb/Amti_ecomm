<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Envios extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'dias_entrega_min',
        'dias_entrega_max',
        'precio',
        'descripcion',
        ];
    
    protected $table = 'envios';
}
