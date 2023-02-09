<?php

namespace Database\Seeders;

use App\Models\Prospectos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProspectosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prospectos')->pluck('id');

        $datos =  [
            [
                'nombre' => 'Karla C.',
                'telefono' => '3366554411',
                'origen' => 'Página',
                'estatus' => 'No contactado'
               
            ],
            [
                'nombre' => 'Paloma C.',
                'telefono' => '5554477886',
                'origen' => 'Página',
                'estatus' => 'No contactado'
               
            ],
            [
                'nombre' => 'Olga R.',
                'telefono' => '1214586399',
                'origen' => 'Página',
                'estatus' => 'No contactado'
               
            ],
        ];

        Prospectos::insert($datos);
    }
}
