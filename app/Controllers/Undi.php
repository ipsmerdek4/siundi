<?php

namespace App\Controllers;
use App\Models\BarangModel;  
use App\Models\KuponModel;  
use App\Models\PemenangModel;  
 

class Undi extends BaseController
{
    public function index()
    {

        $Barang =  new BarangModel(); 
        $Pemenang =  new PemenangModel(); 
        $Kupon =  new KuponModel();  

        $DataBarang = $Barang->findAll();

        $DataKupon = $Kupon->GETCOUNTALL('id_kupon');
        $DataPemenang = $Pemenang->GETCOUNTALL('id_pemenang');

       
        $totalKupon = ($DataKupon[0]->id_kupon - $DataPemenang[0]->id_pemenang);

        $data = array( 
            'title'                 => 'UNDI &rsaquo; [SI~UNDI]',   
            'DataBarang'            => $DataBarang,     
            'totalKupon'             => $totalKupon,
        );
         
        echo view('extend/header', $data); 
        echo view('undi', $data); 
        echo view('extend/footer', $data); 
    } 
    
    
    
    public function get_data()
    {

        $Kupon =  new KuponModel();  
        $Pemenang =  new PemenangModel(); 
        
        $id_barang = $this->request->getVar('access_val');  

        $Datakupon = $Kupon->KUPONDANDOM($id_barang);   
        $Pemenang = $Pemenang->where('id_kupon', $Datakupon[0]->id_kupon)->first();

        if($Pemenang){
            $Datakupon2 = array( 
                'data'                 => 0,  
            );
        }else{
            $Datakupon2 = $Datakupon;
        }
           
        echo json_encode(array("tampil" => $Datakupon2));  
  
       
    }
}
