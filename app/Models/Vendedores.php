<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendedores extends Model
{
    use HasFactory;
    protected $fillable = [
       'nombre',
       'primer_apellido',
       'segundo_apellido',
       'color_identificador',
       'estatus'
        ];
    
    protected $table = 'vendedores';
}
