<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Inventarisasi extends BaseController
{
    public function index()
    {

        return view('pages/PilihAksi');
    }

    public function pindah()
    {

        return view('pages/RuanganInventarisasi');
    }

    public function customerService()
    {

        return view('pages/InputBarang');
    }
}
