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
                'precio' => '1,450'
            ],
            [
                'nombre' => 'Permiso internacional',
                'vigencia' => '3',
                'precio' => '2,700'
            ],
            [
                'nombre' => 'Permiso internacional',
                'vigencia' => '5',
                'precio' => '3,700'
            ],

        ];

        Productos::insert($productos);
    }
}
