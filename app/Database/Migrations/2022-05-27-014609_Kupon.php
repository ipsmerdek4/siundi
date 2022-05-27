<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kupon extends Migration
{
    public function up()
    {
        $this->forge->addField([ 
            'id_kupon'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
			'id_identitas'       => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
			],
			'id_barang'       => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
			],
			'kode_kupon'       => [
                'type'           => 'varchar',
                'constraint'     => 100,
			],
			'tgl_input_kupon' => [
				'type'           => 'DATETIME',
				'null'       	 => true,
			], 
        ]);
        $this->forge->addPrimaryKey('id_kupon', true); 
        $this->forge->addForeignKey('id_identitas', 'identitas', 'id_identitas'); 
        $this->forge->addForeignKey('id_barang', 'barang', 'id_barang'); 
        $this->forge->createTable('kupon'); 
    }

    public function down()
    {
        $this->forge->dropTable('kupon');
    }
}
