<?php 
namespace App\Models;

use CodeIgniter\Model;

class IdentitasModel extends Model{
    protected $table      = 'identitas';
    protected $primaryKey = "id_identitas";
    protected $returnType = "object"; 
    protected $allowedFields = ['nama_lengkap', 'no_hp', 'tgl_input_identitas'];
}