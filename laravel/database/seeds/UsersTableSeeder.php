<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'user_name' => "Administrador",
            'email' => 'info@vidadigitalchaco.com.ar',
            'password' => bcrypt('CMS*l3v3l2'),
            'sucursal_id' => 1
        ]);
        DB::table('users')->insert([
            'user_name' => "Editor",
            'email' => 'editor@editor.com.ar',
            'password' => bcrypt('CMS*l3v3l2'),
            'sucursal_id' => 1
        ]);
    }
}
