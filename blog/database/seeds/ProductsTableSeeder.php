<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciar la tabla.
        Products::truncate();

        $faker = \Faker\Factory::create();

        // Crear artículos ficticios en la tabla
         for ($i = 0; $i < 50; $i++) {
             Products::create([
                 'title' => $faker->sentence,
                 'body' => $faker->paragraph,
                 ]);
         }
    }
}
