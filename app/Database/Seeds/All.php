<?php 
namespace App\Database\Seeds;

class All extends \CodeIgniter\Database\Seeder{
    public function run(){
        $this->call('Barang');
        $this->call('Identitas');
        $this->call('Kupon'); 
    }
}