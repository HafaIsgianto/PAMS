<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DonasiBarang extends Migration
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
            'nama_barang' => [
                'type'       => 'VARCHAR',
                'constraint' => 100
            ],
            'jumlah' => [
                'type' => 'INT'
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
        $this->forge->createTable('donasi_barang');
    }

    public function down()
    {
        $this->forge->dropTable('donasi_barang');
    }
}