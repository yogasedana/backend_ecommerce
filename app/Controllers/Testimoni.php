<?php

namespace App\Controllers;

class Testimoni extends BaseController
{
    public function view_testimoni()
    {
        $data = [
            'title' => 'Testimoni'
        ];

        return view('testimoni/vw_testimoni', $data);
    }

    public function modal()
    {
        $post = $this->request->getVar();
        $aksi = $post['aksi'];
        $id = $post['id'];

        switch ($aksi) {
            case 'tambah':
                $data = [
                    'title' => 'TAMBAH TESTIMONI'
                ];

                $vw_modal = 'modal_tambah_testimoni';
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

        return view('testimoni/' . $vw_modal, $data);
    }
}
