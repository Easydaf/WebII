<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Bookcrud extends Migration
{
    public function up()
    {
        $fields = [
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'judul' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'penulis' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'penerbit' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'tahun_terbit' => [
                'type' => 'YEAR',
            ],
        ];
        $this->forge->addField($fields);
        $this->forge->addKey('id', true);
        $this->forge->createTable('bookcrud');
    }

    public function down()
    {
        $this->forge->dropTable('bookcrud');
    }
}
