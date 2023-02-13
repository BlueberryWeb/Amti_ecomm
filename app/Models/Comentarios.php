<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    use HasFactory;
    protected $filltable = [ 
        'id_usuario',
        'id_delConcepto',
        'comentario',
        'concepto',
     ]; 
 
     protected $table = 'comentarios';
}
