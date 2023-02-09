<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prospectos extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'telefono',
        ];
    
    protected $table = 'prospectos';

    public function scopeMes($query, $inicio, $fin){
        
        return $query->where('created_at', '>=', $inicio)->where('created_at', '<=' , $fin);
    }
}
