<?php

use Illuminate\Database\Seeder;

class ProvinciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provincias')->insert([
            'nombre' => "Corrientes",
            'pais_id' => 1
        ]);

        DB::table('provincias')->insert([
            'nombre' => "Cordoba",
            'pais_id' => 1
        ]);

        DB::table('provincias')->insert([
            'nombre' => "Misiones",
            'pais_id' => 1
        ]);

        DB::table('provincias')->insert([
            'nombre' => "Chaco",
            'pais_id' => 1
        ]);

        DB::table('provincias')->insert([
            'nombre' => "Neuquen",
            'pais_id' => 1
        ]);

        DB::table('provincias')->insert([
            'nombre' => "Mendoza",
            'pais_id' => 1
        ]);

        DB::table('provincias')->insert([
            'nombre' => "Buenos Aires",
            'pais_id' => 1
        ]);

    }
}
