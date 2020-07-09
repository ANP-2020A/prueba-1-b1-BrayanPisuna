<?php

use Illuminate\Database\Seeder;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciar la tabla.
        Clientes::truncate();

        $faker = \Faker\Factory::create();

        // Crear artículos ficticios en la tabla
        for ($i = 0; $i < 50; $i++) {
            Clientes::create([
                'title' => $faker->sentence,
                'body' => $faker->paragraph,
            ]);
        }
    }
}
