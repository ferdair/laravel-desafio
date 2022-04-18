<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class cliente_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            Cliente::create([
                'nombre' => $faker->name,
                'apellido' => $faker->lastName,
                'cedula' => $faker->numerify("#########-#"),
                'email' => $faker->email,
                'telefono' => $faker->numerify("##########"),

            ]);
        }
    }
}
