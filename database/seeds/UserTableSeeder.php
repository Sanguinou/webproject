<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            [
                'first_name' => 'Jean',
                'last_name' => 'Mage',
                'email' => 'jean.mage'.'@gmail.com',
                'password' => bcrypt('secret'),
                'profile_pic' => 'LP.png',
                'id_status_user' => '2',
                'id_school' => '12',
            ],

            [
                'first_name' => 'Gandalf',
                'last_name' => 'Le Gris',
                'email' => 'imneverlate'.'@gmail.com',
                'password' => bcrypt('secret'),
                'profile_pic' => 'arnold.jpg',
                'id_status_user' => '1',
                'id_school' => '4',
            ],

            [
                'first_name' => 'Zelda',
                'last_name' => 'Sagesse',
                'email' => 'ganonscunt'.'@gmail.com',
                'password' => bcrypt('secret'),
                'profile_pic' => 'gaelz.jpg',
                'id_status_user' => '3',
                'id_school' => '21',
            ]
        ]);
    }
}
