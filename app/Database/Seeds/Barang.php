<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Barang extends Seeder
{
    public function run()
    {
        $data = [
            [ 
                'nama_barang'       =>  'Sony',
                'keterangan'        =>  'Xperia Pro-I', 
                'tgl_input_barang'  =>  date("Y-m-d H:i:s")
            ], 
            [ 
                'nama_barang'       =>  'Sony',
                'keterangan'        =>  'Xperia 10 III Lite', 
                'tgl_input_barang'  =>  date("Y-m-d H:i:s")
            ], 
            [ 
                'nama_barang'       =>  'Sony',
                'keterangan'        =>  'Xperia 1 III', 
                'tgl_input_barang'  =>  date("Y-m-d H:i:s")
            ], 
            [ 
                'nama_barang'       =>  'LG',
                'keterangan'        =>  'W41 Pro', 
                'tgl_input_barang'  =>  date("Y-m-d H:i:s")
            ], 
            [ 
                'nama_barang'       =>  'LG',
                'keterangan'        =>  'W41+', 
                'tgl_input_barang'  =>  date("Y-m-d H:i:s")
            ], 
            [ 
                'nama_barang'       =>  'LG',
                'keterangan'        =>  'W41', 
                'tgl_input_barang'  =>  date("Y-m-d H:i:s")
            ], 
            [ 
                'nama_barang'       =>  'Xiaomi',
                'keterangan'        =>  'Mi 11 Ultra', 
                'tgl_input_barang'  =>  date("Y-m-d H:i:s")
            ], 
            [ 
                'nama_barang'       =>  'Xiaomi',
                'keterangan'        =>  'Mi 11', 
                'tgl_input_barang'  =>  date("Y-m-d H:i:s")
            ], 
            [ 
                'nama_barang'       =>  'Xiaomi',
                'keterangan'        =>  '11T', 
                'tgl_input_barang'  =>  date("Y-m-d H:i:s")
            ], 
            [ 
                'nama_barang'       =>  'Samsung',
                'keterangan'        =>  'Galaxy M53 5G', 
                'tgl_input_barang'  =>  date("Y-m-d H:i:s")
            ], 
            [ 
                'nama_barang'       =>  'Samsung',
                'keterangan'        =>  'Galaxy M33 5G', 
                'tgl_input_barang'  =>  date("Y-m-d H:i:s")
            ], 
            [ 
                'nama_barang'       =>  'Samsung',
                'keterangan'        =>  'Galaxy A73 5G', 
                'tgl_input_barang'  =>  date("Y-m-d H:i:s")
            ], 
            [ 
                'nama_barang'       =>  'Oppo',
                'keterangan'        =>  'Find X3 Pro', 
                'tgl_input_barang'  =>  date("Y-m-d H:i:s")
            ],
            [ 
                'nama_barang'       =>  'Oppo',
                'keterangan'        =>  'Find X2 Pro', 
                'tgl_input_barang'  =>  date("Y-m-d H:i:s")
            ],
            [ 
                'nama_barang'       =>  'Oppo',
                'keterangan'        =>  'Find X2', 
                'tgl_input_barang'  =>  date("Y-m-d H:i:s")
            ],
            [ 
                'nama_barang'       =>  'Vivo',
                'keterangan'        =>  'T1 5G', 
                'tgl_input_barang'  =>  date("Y-m-d H:i:s")
            ],
            [ 
                'nama_barang'       =>  'Vivo',
                'keterangan'        =>  'T1 Pro 5G', 
                'tgl_input_barang'  =>  date("Y-m-d H:i:s")
            ],
            [ 
                'nama_barang'       =>  'Vivo',
                'keterangan'        =>  'Y75 5G', 
                'tgl_input_barang'  =>  date("Y-m-d H:i:s")
            ],
            [ 
                'nama_barang'       =>  'Nokia',
                'keterangan'        =>  'C1', 
                'tgl_input_barang'  =>  date("Y-m-d H:i:s")
            ],
            [ 
                'nama_barang'       =>  'Nokia',
                'keterangan'        =>  'G10', 
                'tgl_input_barang'  =>  date("Y-m-d H:i:s")
            ],
            [ 
                'nama_barang'       =>  'Nokia',
                'keterangan'        =>  'G20', 
                'tgl_input_barang'  =>  date("Y-m-d H:i:s")
            ],
            [ 
                'nama_barang'       =>  'Apple',
                'keterangan'        =>  'iPhone XR', 
                'tgl_input_barang'  =>  date("Y-m-d H:i:s")
            ],
            [ 
                'nama_barang'       =>  'Apple',
                'keterangan'        =>  'iPhone 11', 
                'tgl_input_barang'  =>  date("Y-m-d H:i:s")
            ],
            [ 
                'nama_barang'       =>  'Apple',
                'keterangan'        =>  'iPhone 12', 
                'tgl_input_barang'  =>  date("Y-m-d H:i:s")
            ],
        ];

        $this->db->table('barang')->insertBatch($data);
    }
}
