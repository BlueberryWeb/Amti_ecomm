<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos_vendedores extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_vendedor',
        'id_pedido',
         ];
     
     protected $table = 'pedidos_vendedores';
      
}
