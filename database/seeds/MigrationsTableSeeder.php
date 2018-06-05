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
        ));
        
        
    }
}