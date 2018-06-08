<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reviews')->delete();
        
        \DB::table('reviews')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_id' => 1,
                'user_id' => 1,
                'rating' => 3,
                'title' => 'nice',
                'content' => 'good',
                'created_at' => '2018-06-08 00:22:47',
                'updated_at' => '2018-06-08 00:22:47',
            ),
            1 => 
            array (
                'id' => 2,
                'product_id' => 2,
                'user_id' => 1,
                'rating' => 3,
                'title' => 'Nice product man',
                'content' => 'Cheap',
                'created_at' => '2018-06-08 00:27:04',
                'updated_at' => '2018-06-08 00:27:04',
            ),
            2 => 
            array (
                'id' => 3,
                'product_id' => 2,
                'user_id' => 1,
                'rating' => 3,
                'title' => 'Nice product man',
                'content' => 'Cheap',
                'created_at' => '2018-06-08 00:28:12',
                'updated_at' => '2018-06-08 00:28:12',
            ),
            3 => 
            array (
                'id' => 4,
                'product_id' => 1,
                'user_id' => 1,
                'rating' => 3,
                'title' => 'nice3',
                'content' => 'cheap3',
                'created_at' => '2018-06-08 00:28:41',
                'updated_at' => '2018-06-08 00:28:41',
            ),
            4 => 
            array (
                'id' => 5,
                'product_id' => 1,
                'user_id' => 1,
                'rating' => 3,
                'title' => 'nice4',
                'content' => 'cheap4',
                'created_at' => '2018-06-08 00:32:57',
                'updated_at' => '2018-06-08 00:32:57',
            ),
            5 => 
            array (
                'id' => 6,
                'product_id' => 2,
                'user_id' => 1,
                'rating' => 3,
                'title' => '123456',
                'content' => '654321',
                'created_at' => '2018-06-08 00:48:02',
                'updated_at' => '2018-06-08 00:48:02',
            ),
            6 => 
            array (
                'id' => 7,
                'product_id' => 3,
                'user_id' => 1,
                'rating' => 3,
                'title' => 'nice again',
                'content' => 'trial again',
                'created_at' => '2018-06-08 00:56:12',
                'updated_at' => '2018-06-08 00:56:12',
            ),
            7 => 
            array (
                'id' => 8,
                'product_id' => 3,
                'user_id' => 1,
                'rating' => 5,
                'title' => 'wopwop',
                'content' => 'given',
                'created_at' => '2018-06-08 00:56:41',
                'updated_at' => '2018-06-08 00:56:41',
            ),
            8 => 
            array (
                'id' => 13,
                'product_id' => 4,
                'user_id' => 2,
                'rating' => 4,
                'title' => 'nicer',
                'content' => 'nicer',
                'created_at' => '2018-06-08 06:34:07',
                'updated_at' => '2018-06-08 06:34:07',
            ),
        ));
        
        
    }
}