<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddUsersToDatabase extends Migration
{
    public function up()
    {
        // Insert three users into the users table
        $data = [
            [
                'username' => 'admin_user',
                'password' => password_hash('1234', PASSWORD_DEFAULT),
                'role_id' => 1, // Assuming 1 is the admin role in your roles table
                'email' => 'test1@gmail.com', // Assuming 1 is the admin role in your roles table
            ],
            [
                'username' => 'regular_user_1',
                 'password' => password_hash('1234', PASSWORD_DEFAULT),
                'role_id' => 2, // Assuming 2 is the regular user role in your roles table
                'email' => 'test2@gmail.com', // Assuming 1 is the admin role in your roles table
            ],
            [
                'username' => 'regular_user_2',
                'password' => password_hash('1234', PASSWORD_DEFAULT),
                'role_id' => 3, // Assuming 2 is the regular user role in your roles table
                'email' => 'test3@gmail.com', // Assuming 1 is the admin role in your roles table
                
            ],
        ];

        // Use CodeIgniter's query builder to insert data
        $this->db->table('users')->insertBatch($data);
    }

    public function down()
    {
        // Remove the three users if the migration is rolled back
        $this->db->table('users')->whereIn('username', ['admin_user', 'regular_user_1', 'regular_user_2'])->delete();
    }
}
