<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comment')->insert([
            [
                'comment_body' => 'super event, une très bonne idée !',
                'id_user' => '3',
                'id_picture_event' => '1',
            ], 

            [
                'comment_body' => 'incroyable, les bros sont là <3',
                'id_user' => '1',
                'id_picture_event' => '1',
            ],

            [
                'comment_body' => 'J ai bien mangé lol',
                'id_user' => '2',
                'id_picture_event' => '1',
            ]
        ]);
    }
}
