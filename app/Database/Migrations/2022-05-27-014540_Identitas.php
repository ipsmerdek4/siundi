<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Identitas extends Migration
{
    public function up()
    {
        $this->forge->addField([ 
            'id_identitas'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ], 
			'nama_lengkap'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			], 
			'no_hp'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '20',
			], 
			'tgl_input_identitas' => [
				'type'           => 'DATETIME',
				'null'       	 => true,
			], 
        ]);
        $this->forge->addPrimaryKey('id_identitas', true); 
        $this->forge->createTable('identitas'); 
    }

    public function down()
    {
        $this->forge->dropTable('identitas');
    }
}
