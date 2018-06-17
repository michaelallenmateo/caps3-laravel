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
                'id' => 3,
                'product_id' => 2,
                'user_id' => 1,
                'rating' => 3,
                'title' => 'Nice product man',
                'content' => 'Cheap',
                'approved' => 1,
                'created_at' => '2018-06-08 00:28:12',
                'updated_at' => '2018-06-17 07:35:27',
            ),
            1 => 
            array (
                'id' => 4,
                'product_id' => 1,
                'user_id' => 1,
                'rating' => 3,
                'title' => 'nice3',
                'content' => 'cheap3',
                'approved' => 1,
                'created_at' => '2018-06-08 00:28:41',
                'updated_at' => '2018-06-17 07:38:35',
            ),
            2 => 
            array (
                'id' => 7,
                'product_id' => 3,
                'user_id' => 1,
                'rating' => 3,
                'title' => 'update this',
                'content' => 'update this',
                'approved' => 1,
                'created_at' => '2018-06-08 00:56:12',
                'updated_at' => '2018-06-17 12:00:25',
            ),
            3 => 
            array (
                'id' => 13,
                'product_id' => 4,
                'user_id' => 2,
                'rating' => 4,
                'title' => 'nicer',
                'content' => 'nicer',
                'approved' => 1,
                'created_at' => '2018-06-08 06:34:07',
                'updated_at' => '2018-06-17 07:36:20',
            ),
            4 => 
            array (
                'id' => 20,
                'product_id' => 4,
                'user_id' => 8,
                'rating' => 1,
                'title' => 'check if will be reapproved and will affect rating',
                'content' => 'check if will be reapproved and will affect rating',
                'approved' => 1,
                'created_at' => '2018-06-17 14:54:15',
                'updated_at' => '2018-06-17 15:28:03',
            ),
        ));
        
        
    }
}