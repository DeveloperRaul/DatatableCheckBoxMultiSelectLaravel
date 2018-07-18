<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Raúl Cruz Hernández',
            'email' => 'raul.cruz.hdez@hotmail.com',
            'password' => bcrypt('Raul2018')
        ],
        [
            'name' => 'Nazario Tomas Hernández',
            'email' => 'nazatomas9@gmail.com',
            'password' => bcrypt('Naza2018')
        ],
        [
            'name' => 'Ricardo Hernández Santiago',
            'email' => 'rik_hersant@hotmail.com',
            'password' => bcrypt('Richy2018')
        ]
    );
    }
}
