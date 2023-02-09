<?php

namespace Database\Seeders;

use App\Models\Pedidos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pedidos')->pluck('id');

        $pedidos =  [
            [
                'estatus' => 'Exitoso',
                'factura' => 'No',
         
                'id_prospecto' => '1',
                'direccion' => 'Nogales #252',
                'pais' => 'México',
                'sexo' => 'Femenino',
                'estatura' => '1.50',
                'color_ojos' => 'Miel',
                'color_cabello' => 'Castaño',
         
                'id_envio' => '1',
                'nombre' => 'Karina L.',
                'telefono' => '33142536',
                'correo' => 'kar@gmail.com',
                'calle' => 'Café',
                'ciudad' => 'Guadalajara',
                'cp' => '25364',
                'instrucciones' => 'En frente del templo',
         
                'frente_ine' => 'img',
                'vuelta_ine' => 'img',
                'frente_licencia' => 'img',
                'vuelta_licencia'=> 'img',
                'fotografia_personal' => 'img',  
         
                'id_producto' => '1',
                'description' => 'LICENCIA',
                'tarjeta' => 'OXXO',
                'tarjeta_name' => 'OXXO',
                'pago' => '1500',
                'total' => '1800'
            ],
            [
                'estatus' => 'Exitoso',
                'factura' => 'Si',
         
                'id_prospecto' => '2',
                'direccion' => 'Nopal #252',
                'pais' => 'México',
                'sexo' => 'Femenino',
                'estatura' => '1.58',
                'color_ojos' => 'Café',
                'color_cabello' => 'Castaño',
         
                'id_envio' => '1',
                'nombre' => 'Carolina G.',
                'telefono' => '33142536',
                'correo' => 'Car@gmail.com',
                'calle' => 'Nogales',
                'ciudad' => 'Guadalajara',
                'cp' => '69854',
                'instrucciones' => 'En esquina del templo',
         
                'frente_ine' => 'img',
                'vuelta_ine' => 'img',
                'frente_licencia' => 'img',
                'vuelta_licencia'=> 'img',
                'fotografia_personal' => 'img',  
         
                'id_producto' => '2',
                'description' => 'LICENCIA',
                'tarjeta' => 'OXXO',
                'tarjeta_name' => 'OXXO',
                'pago' => '3500',
                'total' => '3500'
            ],

        ];

        Pedidos::insert($pedidos);
    }
}
