<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Inventarisasi extends BaseController
{


    public function index()
    {

        $data = [
            'title' => "Pilih Aksi"
        ];

        return view('pages/PilihAksi', $data);
    }

    public function pindah()
    {
        $data = [
            'title' => "Ruangan Inventaris"
        ];


        return view('pages/RuanganInventarisasi', $data);
    }

    /*bagian customer service*/
    //menampilkan halaman CS
    public function customerService()
    {
        $data = [
            'title' => "Customer Service"
        ];


        echo view('pages/BarangCS', $data);
    }

    //mengisi data di cs
    public function inputCS()
    {
        $data = [
            'title' => "Tambah Data CS"
        ];


        echo view('pages/InputCS', $data);
    }



    //menampilkan halaman akuntansi
    public function akuntansi()
    {
        $data = [
            'title' => "Akuntansi"
        ];
        return view('pages/BarangAkuntansi', $data);
    }

    public function produksi()
    {
        $data = [
            'title' => "Produksi"
        ];


        return view('pages/BarangProduksi', $data);
    }
}
