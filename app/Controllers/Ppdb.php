<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Ppdb extends BaseController
{
    public function pendaftaran()
    {
        $data = [
            'title' => 'PPDB Online',
            'subtitle'=> 'Pendaftaran',
        ];
        return view('v_pendaftaran', $data);
    }
}