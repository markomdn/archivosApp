<?php

use Illuminate\Database\Seeder;

class BloquesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bloques')->insert([
            'cantidad'      => 0,
            'bool_post'     => 0,
            'descripcion'   => 'Columnas',
            'titulo'        => 'Columnas'
        ]);
    }
}
