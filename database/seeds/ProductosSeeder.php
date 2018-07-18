<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 50; $i++) {
            \DB::table('productos')->insert(array(
                   'nombre' => 'Celular ' . $faker->firstNameFemale . ' ' . $faker->lastName,
                   'marca'  => $faker->randomElement(['Samsung','Motorola','iPhone']),
                   'created_at' => date('Y-m-d H:m:s'),
                   'updated_at' => date('Y-m-d H:m:s')
            ));
        }
    }
}
