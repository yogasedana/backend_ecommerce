<?php

namespace App\Controllers;

class Pembayaran extends BaseController
{
    public function view_pembayaran()
    {
        $data = [
            'title' => 'Pembayaran'
        ];

        return view('pembayaran/vw_pembayaran', $data);
    }
}
