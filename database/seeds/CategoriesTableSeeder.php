<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'MAKEUP',
                'created_at' => '2018-06-06 02:42:34',
                'updated_at' => '2018-06-06 02:42:34',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'SKIN CARE',
                'created_at' => '2018-06-06 02:43:21',
                'updated_at' => '2018-06-06 02:43:21',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'HAIR',
                'created_at' => '2018-06-06 02:44:03',
                'updated_at' => '2018-06-06 02:44:03',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'TOOLS AND KIT',
                'created_at' => '2018-06-06 02:44:31',
                'updated_at' => '2018-06-06 02:44:31',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'BODY CARE',
                'created_at' => '2018-06-06 02:44:56',
                'updated_at' => '2018-06-06 02:44:56',
            ),
        ));
        
        
    }
}