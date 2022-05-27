<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pemenang extends Migration
{
    public function up()
    {
        $this->forge->addField([ 
            'id_pemenang'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ], 
			'id_kupon'       => [
				'type'           => 'INT',
				'constraint'     => '5',
                'unsigned'       => true,
			],  
			'tgl_input_pemenang' => [
				'type'           => 'DATETIME',
				'null'       	 => true,
			], 
        ]);
        $this->forge->addPrimaryKey('id_pemenang', true); 
        $this->forge->addForeignKey('id_kupon', 'kupon', 'id_kupon');
        $this->forge->createTable('pemenang'); 
    }

    public function down()
    {
        $this->forge->dropTable('pemenang');
    }
}
