<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'roles_id' => 1,
                'firstname' => 'Mike',
                'lastname' => 'Mateo',
                'username' => 'mikemateo',
                'password' => '$2y$10$u9cqpgWREch9pvbVtRy4yuyRxQSFgPuWSvz07N1FAQmUyyi6qENHa',
                'email' => 'mike@email.com',
                'mobile' => '987654321',
                'address' => 'Phils',
                'remember_token' => 'CqPloZXTa1mhEWGNkvfDJdj0HE0DmC8PaZsYUn1JdeLBBhkJlii18t4Shmy0',
                'created_at' => '2018-06-05 05:33:06',
                'updated_at' => '2018-06-05 05:33:06',
            ),
            1 => 
            array (
                'id' => 2,
                'roles_id' => 1,
                'firstname' => 'user1',
                'lastname' => 'user1',
                'username' => 'user1',
                'password' => '$2y$10$V4gw9lz8/dF8ANsvo9/sSOCpsTm6UkaD4c07Yn70rYJGh3rSxrRMK',
                'email' => 'user@email.com',
                'mobile' => '123456789',
                'address' => 'Phils',
                'remember_token' => 'OzEGSFMcTWqEMX6DALX5LgtBFuuGNWIR4a78vETH4Fo8wdypO3M4sCvivfwB',
                'created_at' => '2018-06-05 05:37:12',
                'updated_at' => '2018-06-05 05:37:12',
            ),
            2 => 
            array (
                'id' => 3,
                'roles_id' => 1,
                'firstname' => 'user2',
                'lastname' => 'user2',
                'username' => 'user2',
                'password' => '$2y$10$.bMru1ewYHuav2ZSOQ3Fbem4mq0iGgueybi5T6KZYqze6bKlzHskq',
                'email' => 'user2@email.com',
                'mobile' => '987654321',
                'address' => 'Phils',
                'remember_token' => 'wqjKEzwbv5NWy95B3xjVljPdb4kdWHnlonROm4ojWo7OPKwon2QYz9TyfUmY',
                'created_at' => '2018-06-05 05:38:19',
                'updated_at' => '2018-06-05 05:38:19',
            ),
            3 => 
            array (
                'id' => 4,
                'roles_id' => 1,
                'firstname' => 'user3',
                'lastname' => 'user3',
                'username' => 'user3',
                'password' => '$2y$10$ZaXteRgtekJ/URqCXUD5JOXwbnL9xfUQeY.0mke4rrp3Wey3BMdYK',
                'email' => 'user3@email.com',
                'mobile' => '654123789',
                'address' => 'Phils',
                'remember_token' => NULL,
                'created_at' => '2018-06-05 05:40:41',
                'updated_at' => '2018-06-05 05:40:41',
            ),
        ));
        
        
    }
}