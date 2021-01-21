<?php

use Illuminate\Database\Seeder;

class PublicacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Publicacion::truncate(); //vacía la tabla de publicaciones
        $faker = \Faker\Factory::create('es_ES'); //crea un Faker español
        // crea 100 publicaciones para la base de datos:
        for ($i = 0; $i < 100; $i++) {
            App\Publicacion::create([
                'titulo' => $faker->sentence,
                'cuerpo' => $faker->paragraph,
            ]);
        }
    }
}
