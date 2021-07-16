<?php

namespace App\Controllers;



class Inventarisasi extends BaseController
{
    protected $request;



    public function index()
    {

        $data = [
            'title' => "Pilih Tindakan"
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

    /*bagian customer service
    >>>==================================*/

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
        //mengubah format tanggal dari html( <input type="date")
        //menjadi format tanggal yang diterima MySQL
        $tanggal = $this->request->getVar('tgl-perolehan');
        $formattedDate = date("Y-m-d H:i:s", strtotime($tanggal));



        $data = [
            'nama_barang' => $this->request->getVar('nama-barang'),
            'tanggal_perolehan' => $formattedDate,
            'keterangan' => $this->request->getVar('keterangan-kondisi'),
            'kondisi_id' => $this->request->getVar('kondisi'),
            'ruangan_id' => $this->request->getVar('keterangan-ruangan'),
        ];

        $Inventaris = model('App\Models\InventarisModel');
        $Inventaris->save($data);
        session()->setFlashData('pesan', 'Data berhasil ditambahkan!');
        return redirect()->to('/Inventarisasi/customerService');
    }
    /*akhir dari bagian customer service
    ==================================<<<*/

    /*bagian akuntansi
    >>>==================================
    */
    public function akuntansi()
    {
        $data = [
            'title' => "Akuntansi"
        ];
        return view('pages/BarangAkuntansi', $data);
    }

    public function inputAcct()
    {
        $data = [
            'title' => "Tambah Data Akuntansi"
        ];


        echo view('pages/input/InputAkuntansi', $data);
    }
    //menangkap data yang dikirim
    public function saveAcct()
    {
        //mengubah format tanggal dari html( <input type="date")
        //menjadi format tanggal yang diterima MySQL
        $tanggal = $this->request->getVar('tgl-perolehan');
        $formattedDate = date("Y-m-d H:i:s", strtotime($tanggal));



        $data = [
            'nama_barang' => $this->request->getVar('nama-barang'),
            'tanggal_perolehan' => $formattedDate,
            'keterangan' => $this->request->getVar('keterangan-kondisi'),
            'kondisi_id' => $this->request->getVar('kondisi'),
            'ruangan_id' => $this->request->getVar('keterangan-ruangan'),
        ];

        $Inventaris = model('App\Models\InventarisModel');
        $Inventaris->save($data);
        session()->setFlashData('pesan', 'Data berhasil ditambahkan!');
        return redirect()->to('/Inventarisasi/akuntansi');
    }
    /*akhir dari bagian akuntansi
    ==================================<<<*/

    /*bagian produksi
    >>>==================================
    */
    public function produksi()
    {
        $data = [
            'title' => "Produksi"
        ];


        return view('pages/BarangProduksi', $data);
    }

    public function inputProduksi()
    {
        $data = [
            'title' => "Tambah Data Produksi"
        ];


        echo view('pages/input/InputProduksi', $data);
    }
    /*akhir dari bagian akuntansi
    ==================================<<<*/

    // halaman about us
    public function about()
    {

        $data = [
            'title' => 'Tentang'
        ];

        return view('pages/Tentang', $data);
    }
}
