<?php

namespace App\Controllers;

class StokBarang extends BaseController
{
    public function view_stok()
    {
        $data = [
            'title' => 'Stok Barang'
        ];

        return view('barang/vw_stok_barang', $data);
    }
}
