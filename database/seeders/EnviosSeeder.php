<?php

namespace Database\Seeders;

use App\Models\Envios;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnviosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('envios')->pluck('id');

        $envios =  [
            [   
                'nombre' => 'Estandar',
                'dias_entrega_min' => '3',
                'dias_entrega_max' => '4',
                'descripcion' => 'dias habiles',
                'precio' => '0',
            ],
            [
                'nombre' => 'Express',
                'dias_entrega_min' => '1',
                'dias_entrega_max' => '2',
                'descripcion' => 'dias habiles',
                'precio' => '199',
            ],
            [
                'nombre' => 'Recogerla',
                'dias_entrega_min' => '0',
                'dias_entrega_max' => '0',
                'descripcion' => 'Encualquiera de nuestras sucursales',
                'precio' => '0',
            ],
            
          
        ];

        Envios::insert($envios);
    }
}
