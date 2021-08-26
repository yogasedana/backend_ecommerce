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

    public function modal()
    {
        $post = $this->request->getVar();
        $aksi = $post['aksi'];
        $id = $post['id'];

        switch ($aksi) {
            case 'tambah':
                $data = [
                    'title' => 'TAMBAH BARANG',
                ];

                $vw_modal = 'modal_tambah_barang';
                break;

            case 'edit':
                $data = [
                    'title' => 'EDIT PESAN'
                ];

                $vw_modal = 'modal_EditPesan';
                break;

            case 'hapus':

                $vw_modal = 'modal_hapusPesan';
                break;

            default:
                # code...
                break;
        }

        return view('barang/' . $vw_modal, $data);
    }
}
