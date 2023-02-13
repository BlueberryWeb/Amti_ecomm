<?php

namespace Database\Seeders;

use App\Models\Productos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->pluck('id');

        $productos =  [
            [
                'nombre' => 'Permiso internacional',
                'vigencia' => '1',
                'precio' => '1450'
            ],
            [
                'nombre' => 'Permiso internacional',
                'vigencia' => '3',
                'precio' => '2700'
            ],
            [
                'nombre' => 'Permiso internacional',
                'vigencia' => '5',
                'precio' => '3700'
            ],

        ];

        Productos::insert($productos);
    }
}
