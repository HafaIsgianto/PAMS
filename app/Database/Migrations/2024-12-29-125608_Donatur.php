<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Donatur extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'auto_increment' => true
            ],
            'nama' => [
                'type'       => 'VARCHAR',
                'constraint' => 100
            ],
            'alamat' => [
                'type' => 'TEXT'
            ],
            'no_telepon' => [
                'type'       => 'VARCHAR',
                'constraint' => 15
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 100
            ],
            'created_at' => [
                'type'    => 'TIMESTAMP',
                'null'    => true,
                'default' => null
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('donatur');
    }

    public function down()
    {
        $this->forge->dropTable('donatur');
    }
}