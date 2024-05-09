<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'karina perez figueroa',
            'email' => 'fkarina996@gmail.com',
            'password' => Hash::make('54231'),
            'rol_id' => 2,
            'created_at' => Carbon::now()                                                                                                                                                                                                                                                                                                                                                                                                  

        ]);

        DB::table('users')->insert([
            'name' => 'Yamileth figueroa',
            'email' => 'Yams687@gmail.com',
            'password' => Hash::make('54231'),
            'rol_id' => 1,
            'created_at' => Carbon::now()                                                                                                                                                                                                                                                                                                                                                                                                  

        ]);
    }
}
