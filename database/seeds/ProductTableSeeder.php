<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            [
                'product_name' => 'Veste CESI bleu',
                'product_price' => '50',
                'product_desc' => 'vest couleur bleu avec le logo du cesi sur le coeur et le logo du BDE sur le dos',
                'stock' => '52',
<<<<<<< HEAD
                'id_category' => '1',             
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
=======
                'id_category' => '1',
>>>>>>> simon
            ], 

            [
                'product_name' => 'Pull CESI noir',
                'product_price' => '35',
                'product_desc' => 'le classic pull avec le logo du BDE sur l\'avant',
                'stock' => '69',
<<<<<<< HEAD
                'id_category' => '1',               
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
=======
                'id_category' => '1',
>>>>>>> simon
            ],

            [
                'product_name' => 'Mug CESI CORP',
                'product_price' => '16',
                'product_desc' => 'mug blanc avec le logo cesicorp',
                'stock' => '12',
<<<<<<< HEAD
                'id_category' => '2',               
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
=======
                'id_category' => '2',
>>>>>>> simon
            ],

            [
                'product_name' => 'Autocollant CESI',
                'product_price' => '6',
                'product_desc' => 'autocollant du logo du CESI',
                'stock' => '0',
<<<<<<< HEAD
                'id_category' => '2',               
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
=======
                'id_category' => '2',
>>>>>>> simon
            ]
        ]);
    }
}
