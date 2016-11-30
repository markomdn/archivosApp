<?php

use Illuminate\Database\Seeder;

class CiudadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ciudades')->insert([
            'nombre' => "Resistencia",
            'provincia_id' => 4
        ]);
        DB::table('ciudades')->insert([
            'nombre' => "Villa Angela",
            'provincia_id' => 4
        ]);
        DB::table('ciudades')->insert([
            'nombre' => "Saenz Peña",
            'provincia_id' => 4
        ]);
        DB::table('ciudades')->insert([
            'nombre' => "Machagai",
            'provincia_id' => 4
        ]);
        DB::table('ciudades')->insert([
            'nombre' => "La Verde",
            'provincia_id' => 4
        ]);

        DB::table('ciudades')->insert([
            'nombre' => "Corrientes",
            'provincia_id' => 1
        ]);
        DB::table('ciudades')->insert([
            'nombre' => "Paso de la Patria",
            'provincia_id' => 1
        ]);
        DB::table('ciudades')->insert([
            'nombre' => "Ituizango",
            'provincia_id' => 1
        ]);
        DB::table('ciudades')->insert([
            'nombre' => "Santo Tome",
            'provincia_id' => 1
        ]);
        DB::table('ciudades')->insert([
            'nombre' => "Empedrado",
            'provincia_id' => 1
        ]);
    }
}
