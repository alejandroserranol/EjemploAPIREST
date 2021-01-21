<?php

use Illuminate\Database\Seeder;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Usuario::truncate(); //vacía la tabla de Usuarios
        $faker = \Faker\Factory::create('es_ES'); //crea un Faker español
        // crea 100 Usuarios para la base de datos:
        for ($i = 0; $i < 100; $i++) {
            App\Usuario::create([
                'nombre' => $faker->name,
                'email' => $faker->email,
                'password' => $faker->password
            ]);
        }
    }
}
