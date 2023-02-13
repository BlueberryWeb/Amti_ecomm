<?php

namespace Database\Seeders;

use App\Models\Vendedores;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VendedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vendedores::truncate();
        DB::table('vendedores')->pluck('id');
        $datos = [
            [
                'nombre' => 'Aldo',
                'primer_apellido' => 'Martínez',
                'segundo_apellido' => 'Rodríguez',
                'color_identificador' => '#15f70',
                'estatus' => 'Vigente',
            ],
            [
                'nombre' => 'Kait',
                'primer_apellido' => 'Martínez',
                'segundo_apellido' => 'Cano',
                'color_identificador' => '#f6e47',
                'estatus' => 'Vigente',
            ]

        ];
        Vendedores::insert($datos);
    }
}
