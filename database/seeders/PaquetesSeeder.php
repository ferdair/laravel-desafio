<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Paquetes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaquetesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clientes = Cliente::pluck('id');

        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            Paquetes::create([
                'id_cliente' => $faker->randomElement($clientes),
                'origen' => $faker->city,
                'destino' => $faker->city,
                'detalle' => $faker->sentence,
                'precio' => $faker->randomDigit,
                'peso' => $faker->randomDigit,



            ]);
        }
    }
}
