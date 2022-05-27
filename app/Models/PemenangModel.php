<?php 
namespace App\Models;

use CodeIgniter\Model;

class PemenangModel extends Model{
    protected $table      = 'pemenang';
    protected $primaryKey = "id_pemenang";
    protected $returnType = "object"; 
    protected $allowedFields = ['id_kupon', 'tgl_input_pemenang'];


    function GETCOUNTALL( $id_pemenang  = null )
    { 
        $builder = $this->db->table('pemenang');   
        $builder->selectCount($id_pemenang); 
        $query = $builder->get();

        return $query->getResult();
    }
}