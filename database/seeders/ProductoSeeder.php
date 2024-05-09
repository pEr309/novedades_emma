<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('producto')->insert([
            'nombre'=> 'Bolsa Tote para mujer con varios compartimientos',
            'descripcion'=>'Para una ocasion especialy elegante',
            'cantidad'=> '$1,280',
            'imagen'=> '',
            'user_id'=> 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('producto')->insert([
            'nombre'=> 'Bolsa Tote para mujer con varios compartimientos',
            'descripcion'=>'Para una ocasion especial, no te quedes sin una bolsa tan casual y elegante',
            'cantidad'=> '$1,280',
            'imagen'=> '',
            'user_id'=> 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('producto')->insert([
            'nombre'=> 'Bolsa Tote para mujer con varios compartimientos',
            'descripcion'=>'Para una ocasion especial',
            'cantidad'=> '$1,280',
            'imagen'=> '',
            'user_id'=> 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('producto')->insert([
            'nombre'=> 'Bolsa Tote para mujer con varios compartimientos',
            'descripcion'=>'Para una ocasion especial',
            'cantidad'=> '$1,280',
            'imagen'=> '',
            'user_id'=> 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
 
    
       
}
