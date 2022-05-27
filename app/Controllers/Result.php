<?php

namespace App\Controllers;
use App\Models\BarangModel;  
use App\Models\KuponModel;  
use App\Models\PemenangModel;  
use App\Models\IdentitasModel;  

class Result extends BaseController
{
    public function index()
    {
 
        $Barang     =  new BarangModel(); 
        $Pemenang   =  new PemenangModel(); 
        $Kupon      =  new KuponModel();  
        $Identitas  =  new IdentitasModel();  

        $id_barang  = $this->request->getVar('barangku'); 
        $Hasil      = $this->request->getVar('HSL'); 

        if (isset($Hasil)) {
            $Hasil = $Hasil;
        }else{
            return redirect()->to(base_url()); 
        }
        

        $DataBarang = $Barang->findAll();
 
      
        $DataKupon = $Kupon->GETCOUNTALL('id_kupon');
        $DataPemenang = $Pemenang->GETCOUNTALL('id_pemenang');
        $totalKupon = ($DataKupon[0]->id_kupon - $DataPemenang[0]->id_pemenang); 

        $JOINKUPON = $Kupon->GETJOIN('kode_kupon', $Hasil); 
  
        $data = array( 
            'title'         => 'Result &rsaquo; [SI~UNDI]',     
            'DataBarang'    => $DataBarang,    
            'hasil'         => $Hasil,   
            'totalKupon'    => $totalKupon,
            'id_barang'     => $id_barang,
            'JOINKUPON'     => $JOINKUPON, 
        );
         
        echo view('extend/header', $data); 
        echo view('result', $data); 
        echo view('extend/footer', $data);   
 

    }

    public function get_data()
    {
  
        $Pemenang   =  new PemenangModel(); 
        $Kupon      =  new KuponModel();  

        $id_kupon = $this->request->getVar('access_val'); 
 
        $Pemenang->insert([ 
            'id_kupon'              => $id_kupon,   
            'tgl_input_pemenang'    => date('Y-m-d H:i:s'),
        ]);
 
        $data = array( 
                    'TEXT' => "SELAMAT",   
        );
        echo json_encode(array( "tampil" => $data ));  

       
    }

 


    public function get_data_all()
    {
  
        $Pemenang   =  new PemenangModel(); 
        $Kupon      =  new KuponModel();  

        $DataPemenang = $Pemenang->findAll();

        $no = 0;
        foreach ($DataPemenang as $value) {
            $no++;
            $datakupon = $Kupon->GETJOIN('id_kupon', $value->id_kupon);
             
            
            $remakeDataPemenang[] = array( 
                'no'    => $no,
                'nama_lengkap' => $datakupon[0]->nama_lengkap,  
                'no_hp' => $datakupon[0]->no_hp,  
                'hadiah' => '('.$datakupon[0]->nama_barang.') '.$datakupon[0]->keterangan, 
                'kode_kupon' => $datakupon[0]->kode_kupon , 
            );
             
        }


        if(isset($remakeDataPemenang)){
            $remakeDataPemenang = $remakeDataPemenang;
        }else{
            $remakeDataPemenang[] = array( 
                'no'    => '-',  
                'nama_lengkap' => '-',  
                'no_hp' => '-',
                'hadiah' => '-',
                'kode_kupon' =>  '-',
            );
        }
         
        echo json_encode(array( "aaData" => $remakeDataPemenang ));  

       
    }
















}
