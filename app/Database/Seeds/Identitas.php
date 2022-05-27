<?php 
namespace App\Database\Seeds;

class Identitas extends \CodeIgniter\Database\Seeder
{
    public function run()
    {  
        $faker = \Faker\Factory::create('id_ID');

        for ($i=0; $i < 100 ; $i++) {   
            $data =     [ 
                        'nama_lengkap'          =>  $faker->name,
                        'no_hp'                 =>  $faker->e164PhoneNumber, 
                        'tgl_input_identitas'   =>  date("Y-m-d H:i:s"), 
                        ]; 
            $this->db->table('identitas')->insert($data);
        }


    }
}