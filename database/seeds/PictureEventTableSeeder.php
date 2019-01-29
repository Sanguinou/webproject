<?php

use Illuminate\Database\Seeder;

class PictureEventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('picture_event')->insert([
            [
                'picture_event_name' => 'bgevent.jpg',
                'picture_event_body' => 'table des A1, la meilleure des promos',
                'id_user' => '1',
                'id_event' => '1',
            ], 

            [
                'picture_event_name' => 'bgevent2.jpg',
                'picture_event_body' => 'les bros !!',
                'id_user' => '1',
                'id_event' => '1',
            ]
        ]);
    }
}
