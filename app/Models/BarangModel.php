<?php 
namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model{
    protected $table      = 'barang';
    protected $primaryKey = "id_barang";
    protected $returnType = "object"; 
    protected $allowedFields = ['nama_barang', 'keterangan', 'tgl_input_barang'];

}