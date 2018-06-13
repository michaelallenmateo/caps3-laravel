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
                'profile_image' => '1528879366.jpg',
                'remember_token' => 'WFM3DIpXpaEJ1UwxxDQRjNfdRFqBbJjwGiUyM8Jw8YWhfQMltI3xDWXA6rqu',
                'created_at' => '2018-06-05 05:33:06',
                'updated_at' => '2018-06-13 08:42:46',
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
                'profile_image' => 'user.png',
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
                'profile_image' => '1528894865.png',
                'remember_token' => 'M1ysuvw4PRszCVrTj5zsTrNKe6qCi9bSUGnHj8GU8C1hznz7h1g1j7ijkzrT',
                'created_at' => '2018-06-05 05:38:19',
                'updated_at' => '2018-06-13 13:01:05',
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
                'profile_image' => 'user.png',
                'remember_token' => NULL,
                'created_at' => '2018-06-05 05:40:41',
                'updated_at' => '2018-06-05 05:40:41',
            ),
            4 => 
            array (
                'id' => 8,
                'roles_id' => 1,
                'firstname' => 'Bam',
                'lastname' => 'Mateo',
                'username' => 'van',
                'password' => '$2y$10$ssRtAZDLb9Hft6qSEuPEvuO6IcGk6LGur/o/3ICHuovZQXAndav1m',
                'email' => 'bam@email.com',
                'mobile' => '12345678998',
                'address' => 'Makati',
                'profile_image' => '1528894732.jpg',
                'remember_token' => 'dxavD251OHWTllgU0wJkZPb4ouTRZehobphsdGTT8P5N2EpVyovq7butk3cG',
                'created_at' => '2018-06-09 01:59:23',
                'updated_at' => '2018-06-13 12:59:09',
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
                'profile_image' => 'user.png',
                'remember_token' => 'YcVdcDjZNpSF8Nraxyf7THTTn2Xm99Qo6KN6ZaeB6VKsUHXmnbv9ZuVyFokZ',
                'created_at' => '2018-06-12 08:55:20',
                'updated_at' => '2018-06-12 08:55:20',
            ),
        ));
        
        
    }
}