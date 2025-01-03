<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DonasiUang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'auto_increment' => true
            ],
            'id_donatur' => [
                'type' => 'INT'
            ],
            'jumlah' => [
                'type'       => 'DECIMAL',
                'constraint' => '15,2'
            ],
            'tanggal' => [
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
        $this->forge->addForeignKey('id_donatur', 'donatur', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('donasi_uang');
    }

    public function down()
    {
        $this->forge->dropTable('donasi_uang');
    }
}