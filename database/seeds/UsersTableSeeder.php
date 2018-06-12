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
        

        \DB::table('Users')->delete();
        
        \DB::table('Users')->insert(array (
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
                'remember_token' => 'Ufrns5p7XuisoWOd47h5BQcL7boTquyXyKJdhV9XGZ2E1w7o9KrdqXZUchpP',
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
            4 => 
            array (
                'id' => 8,
                'roles_id' => 1,
                'firstname' => 'bam',
                'lastname' => 'mateo',
                'username' => 'van',
                'password' => '$2y$10$ssRtAZDLb9Hft6qSEuPEvuO6IcGk6LGur/o/3ICHuovZQXAndav1m',
                'email' => 'bam@email.com',
                'mobile' => '12345678998',
                'address' => 'Makati',
                'remember_token' => 'wsQWDadLHkI5vFUbIZasKIUUfzk9EUPBLRdLLKaPS69mzDmHI6RgTCXVrGvB',
                'created_at' => '2018-06-09 01:59:23',
                'updated_at' => '2018-06-09 01:59:23',
            ),
            5 => 
            array (
                'id' => 9,
                'roles_id' => 2,
                'firstname' => 'admin',
                'lastname' => 'admin',
                'username' => 'admin',
                'password' => '$2y$10$sw91.62ZfQbiPga4zAwOD.btoGYgOa7H742kRRF8XOox1OR2OZy02',
                'email' => 'admin@email.com',
                'mobile' => '123456789',
                'address' => 'Philippines',
                'remember_token' => 'YcVdcDjZNpSF8Nraxyf7THTTn2Xm99Qo6KN6ZaeB6VKsUHXmnbv9ZuVyFokZ',
                'created_at' => '2018-06-12 08:55:20',
                'updated_at' => '2018-06-12 08:55:20',
            ),
        ));
        
        
    }
}