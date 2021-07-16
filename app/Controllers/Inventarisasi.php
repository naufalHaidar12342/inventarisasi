<?php

namespace App\Controllers;



class Inventarisasi extends BaseController
{
    protected $request;



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
    public function ruanganBMU()
    {
        $data = [
            'title' => "Pindah Ruangan BMU"
        ];

        return view('pages/PindahRuanganBMU', $data);
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


        echo view('pages/input/InputCS', $data);
    }

    //menangkap data yang dikirim
    public function saveCS()
    {
        $tanggal = $this->request->getVar('tgl-perolehan');
        $formattedDate = date("Y-m-d H:i:s", strtotime($tanggal));



        $data = [
            'nama_barang' => $this->request->getVar('nama-barang'),
            'kondisi_id' => $this->request->getVar('kondisi'),
            'tanggal_perolehan' => $formattedDate,
            'keterangan' => $this->request->getVar('keterangan'),
        ];

        $Inventaris = model('App\Models\InventarisModel');
        $Inventaris->save($data);
        session()->setFlashData('pesan', 'Data berhasil ditambahkan!');
        return redirect()->to('/Inventarisasi/customerService');
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
