<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengeluaran extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'auto_increment' => true
            ],
            'id_donasi_uang' => [
                'type' => 'INT'
            ],
            'jenis_pengeluaran' => [
                'type'       => 'ENUM',
                'constraint' => ['barang', 'operasional']
            ],
            'deskripsi' => [
                'type' => 'TEXT'
            ],
            'jumlah' => [
                'type'       => 'DECIMAL',
                'constraint' => '15,2'
            ],
            'tanggal' => [
                'type' => 'DATE'
            ],
            'created_at' => [
                'type'    => 'TIMESTAMP',
                'null'    => true,
                'default' => null
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_donasi_uang', 'donasi_uang', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('pengeluaran');
    }

    public function down()
    {
        $this->forge->dropTable('pengeluaran');
    }
}
