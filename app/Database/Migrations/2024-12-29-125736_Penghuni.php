<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penghuni extends Migration
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
            'tanggal_lahir' => [
                'type' => 'DATE'
            ],
            'jenis_kelamin' => [
                'type'       => 'ENUM',
                'constraint' => ['L', 'P']
            ],
            'alamat' => [
                'type' => 'TEXT'
            ],
            'tanggal_masuk' => [
                'type' => 'DATE'
            ],
            'keterangan' => [
                'type' => 'TEXT'
            ],
            'created_at' => [
                'type'    => 'TIMESTAMP',
                'null'    => true,
                'default' => null
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('penghuni');
    }

    public function down()
    {
        $this->forge->dropTable('penghuni');
    }
}