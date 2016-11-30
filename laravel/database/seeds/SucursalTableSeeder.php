<?php

use Illuminate\Database\Seeder;

class SucursalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sucursales')->insert([
            'nombre' => "corrientes",
            'descripcion' => 'corrientes'
        ]);

        DB::table('sucursales')->insert([
            'nombre' => "hipodromo",
            'descripcion' => 'hipodromo'
        ]);

        DB::table('sucursales')->insert([
            'nombre' => "bella-vista",
            'descripcion' => 'bella vista'
        ]);

        DB::table('sucursales')->insert([
            'nombre' => "goya",
            'descripcion' => 'goya'
        ]);

        DB::table('sucursales')->insert([
            'nombre' => "esquina",
            'descripcion' => 'esquina'
        ]);

        DB::table('sucursales')->insert([
            'nombre' => "santo-tome",
            'descripcion' => 'paso-de-la-patria'
        ]);
    }
}
