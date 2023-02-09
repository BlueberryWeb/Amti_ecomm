<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->pluck('id');
        $usuarios = [
            [    
                'name' => 'aldo',
                'email' => 'aldo@gmail.com',
                'password' => bcrypt('12345678'),
            ],
        ];
        User::insert($usuarios);
    }
}
