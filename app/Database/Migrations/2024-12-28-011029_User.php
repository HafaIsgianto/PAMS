<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'auto_increment' => true
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => 30
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 100
            ],
            'no_hp' => [
                'type'       => 'VARCHAR',
                'constraint' => 15
            ],
            'role' => [
                'type'       => 'ENUM',
                'constraint' => ['owner', 'user'],
                'default'    => 'user'
            ],
            'created_at' => [
                'type'    => 'TIMESTAMP',
                'null'    => true,
                'default' => null
            ],
            'updated_at' => [
                'type'    => 'TIMESTAMP',
                'null'    => true,
                'default' => null
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }
    

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
