<?php 
namespace App\Models;

use CodeIgniter\Model;

class KuponModel extends Model{
    protected $table      = 'kupon';
    protected $primaryKey = "id_kupon";
    protected $returnType = "object"; 
    protected $allowedFields = ['id_identitas', 'id_barang', 'kode_kupon', 'tgl_input_kupon'];



    function KUPONDANDOM( $id_barang = null )
    { 
        $builder = $this->db->table('kupon'); 
        $builder->where('id_barang', $id_barang);
        $builder->orderBy('id_barang', 'RANDOM'); 
        $builder->limit(1);
        $query = $builder->get();

        return $query->getResult();
    }


    function GETCOUNTALL( $id_kupon = null )
    { 
        $builder = $this->db->table('kupon');   
        $builder->selectCount($id_kupon); 
        $query = $builder->get();

        return $query->getResult();
    }



    function GETJOIN( $nm_Field = null, $data_Field = null )
    { 
        $builder = $this->db->table('kupon');
        $builder->join('identitas', 'identitas.id_identitas = kupon.id_identitas  ');  
        $builder->join('barang', 'barang.id_barang = kupon.id_barang ');
        
        $builder->where ($nm_Field,  $data_Field); 
        $query = $builder->get();

        return $query->getResult();
    }












}