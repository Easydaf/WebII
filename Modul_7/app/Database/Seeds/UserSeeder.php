<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'username' => 'admin',
            'password' => 'admin123', // sementara belum di-hash
            'email'    => 'admin@example.com'
        ];

        // Simple Queries
        $this->db->table('user')->insert($data);
    }
}