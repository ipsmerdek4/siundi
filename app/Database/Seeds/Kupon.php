<?php 
namespace App\Database\Seeds;

class Kupon extends \CodeIgniter\Database\Seeder{
    public function run(){ 

        function generateRandomString($length) {
            $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        for ($i=0; $i < 1000 ; $i++) {   
            $data =     [ 
                        'id_identitas'          =>  rand(1,100),
                        'id_barang'             =>  rand(1,24),
                        'kode_kupon'            =>  generateRandomString(3).'-'.generateRandomString(4).'-'.generateRandomString(4).'-'.generateRandomString(3).'-'.generateRandomString(4).'-'.generateRandomString(4),
                        'tgl_input_kupon'   =>  date("Y-m-d H:i:s"), 
                        ]; 
            $this->db->table('kupon')->insert($data);
        }
       
 
    }
}