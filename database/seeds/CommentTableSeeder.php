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
<<<<<<< HEAD
                'comment_date' => date('d-m-Y H:i'),
                'id_user' => '3',
                'id_picture_event' => '1',                
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
=======
                'id_user' => '3',
                'id_picture_event' => '1',
>>>>>>> simon
            ], 

            [
                'comment_body' => 'incroyable, les bros sont là <3',
<<<<<<< HEAD
                'comment_date' => date('d-m-Y H:i'),
                'id_user' => '1',
                'id_picture_event' => '1',                
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
=======
                'id_user' => '1',
                'id_picture_event' => '1',
>>>>>>> simon
            ],

            [
                'comment_body' => 'J ai bien mangé lol',
<<<<<<< HEAD
                'comment_date' => date('d-m-Y H:i'),
                'id_user' => '2',
                'id_picture_event' => '1',                
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
=======
                'id_user' => '2',
                'id_picture_event' => '1',
>>>>>>> simon
            ]
        ]);
    }
}
