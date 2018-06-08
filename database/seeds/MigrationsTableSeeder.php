<?php

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 4,
                'migration' => '2013_06_05_025545_create_roles_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 5,
                'migration' => '2014_10_12_000000_create_users_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 6,
                'migration' => '2014_10_12_100000_create_password_resets_table',
                'batch' => 1,
            ),
            3 => 
            array (
                'id' => 20,
                'migration' => '2018_06_04_011205_products_categories_table',
                'batch' => 2,
            ),
            4 => 
            array (
                'id' => 21,
                'migration' => '2018_06_05_011502_products_table',
                'batch' => 2,
            ),
            5 => 
            array (
                'id' => 22,
                'migration' => '2018_06_06_011733_product_reviews_table',
                'batch' => 2,
            ),
        ));
        
        
    }
}