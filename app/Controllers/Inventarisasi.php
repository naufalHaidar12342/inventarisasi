<?php

namespace App\Controllers;

use App\Models\InventarisModel;


class Inventarisasi extends BaseController
{


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


        return view('pages/BarangCS', $data);
    }

    //mengisi data di cs
    public function inputCS()
    {

        $data = [
            'title' => "Tambah Data CS",

        ];


        return view('pages/input/InputCS', $data);
    }

    //menu edit
    public function editCS()
    {
        $data = [
            'title' => "Edit Ruang CS"
        ];
        return view('pages/edit/EditCS', $data);
    }

    public function updateCS()
    {
    }


    //menangkap data yang dikirim
    public function saveCS()
    {

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
            'title' => "Tambah Data Akuntansi",

        ];


        return view('pages/input/InputAkuntansi', $data);
    }

    //menu edit milik ruangan akuntansi
    public function editAcct()
    {
        $data = [
            'title' => 'Edit Ruang Akuntansi'
        ];

        return view('pages/edit/EditAkuntansi', $data);
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
            'title' => "Tambah Data Produksi",

        ];


        return view('pages/input/InputProduksi', $data);
    }

    public function editProduksi()
    {
        $data = [
            'title' => 'Edit Ruang Produksi'
        ];

        return view('pages/edit/EditProduksi', $data);
    }

    public function saveProduksi()
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

    //fungsi delete. belum sempat diterapkan
    public function delete($id)
    {
    }
    /*akhir dari bagian produksi
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
