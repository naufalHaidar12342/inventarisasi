<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<h2 class="fs-3 text-center mb-5 mt-5"> Edit Data Barang</h2>

<!-- tombol kembali ke halaman sebelumnya -->
<div class="container d-flex flex-column align-items-start">
    <a href="<?= base_url(); ?>/Inventarisasi/produksi" class="btn btn-primary shadow my-4">
        <i class="bi bi-box-arrow-left "></i>
        Kembali
    </a>
</div>

</div>

<div class="container d-flex flex-column">
    <div class="row justify-content-between me-4 ms-3 my-4 w-100">

        <!-- kolom kiri -->
        <div class="col-5">
            <div class="col-12 d-flex flex-row mb-4">
                <label for="Ruangan" class="col-form-label me-4">Ruangan</label>
                <?php
                $callModel = model('App\Models\RuanganModel');
                $ruangan = $callModel->getWhere(['id' => '2'])->getResultArray();
                ?>
                <?php foreach ($ruangan as $nama_ruangan) : ?>
                    <input type="text" class="form-control shadow" value="<?= $nama_ruangan['kode_ruangan']; ?> - <?= $nama_ruangan['nama_ruangan']; ?>" readonly>
                <?php endforeach; ?>
            </div>

        </div>
        <!-- kolom kanan -->
        <!-- <div class="col-5">
            <div class="col-12 d-flex flex-row mb-4">
                <label for="PengurusBarang" class="col-form-label me-4">Pengurus Barang</label>
                <input type=" text" class="form-control shadow">
            </div>
        </div> -->
    </div>

</div>



<!-- baris untuk tombol -->
<div class="container d-flex flex-column">
    <div class="row d-flex my-4">
        <div class="col-12">
            <a href="<?= base_url(); ?>/Inventarisasi/inputProduksi" class="btn btn-success shadow">
                <i class="bi bi-file-earmark-plus"></i>
                Tambah Data
            </a>
            <a href="<?= base_url(); ?>/Inventarisasi/produksi" class="btn btn-success shadow ms-2">
                <i class="bi bi-check2-square"></i>
                Selesai
            </a>
        </div>
    </div>
</div>

<!-- tabel berisi barangnya -->
<div class="container d-flex flex-column">
    <div class="table-responsive mt-5 ms-1 me-5">
        <table class="table table-bordered">
            <thead class="text-center align-middle">
                <th>No</th>
                <th>Nama Barang</th>
                <th>Tanggal Perolehan</th>
                <th>Keterangan Ruangan</th>
                <th>Kondisi</th>
                <th>Keterangan Kondisi</th>
            </thead>

            <tbody>
                <!-- setiap halaman dimuat, akan memanggil tabel inventaris,
                    kemudian melakukan perintah join. 
                    
                    Selanjutnya, mengurutkan data berdasarkan 
                    tanggal perolehan yang terkini/terbaru.  
                    
                    Lalu, melakukan filter (SELECT... WHERE...) dimana kita mencari ruangan_id
                    di dalam tabel inventaris yang bernilai sekian.
                    
                    Terakhir, kita return hasilnya dalam bentuk array, supaya kita
                    cukup mengakses key dari dalam array tersebut (jika key dipanggil,
                    ia akan menarik value yang menjadi pasangannya-->
                <?php
                $callModel = model('App\Models\InventarisModel');
                $index = 1;
                $shows = $callModel->table('inventaris')
                    ->join('kondisi', 'kondisi.id=inventaris.kondisi_id')
                    ->join('ruangan', 'ruangan.id=inventaris.ruangan_id')
                    ->orderBy('tanggal_perolehan', 'DESC')
                    ->getWhere([
                        'ruangan_id' => '2'
                    ])
                    ->getResultArray();


                ?>



                <?php foreach ($shows as $data) :    ?>
                    <!--baris tabel  -->
                    <tr>
                        <!-- isi dari tiap kolom. mengisinya dari kiri ke kanan -->
                        <td class="text-center align-middle"><?= $index++; ?></td>
                        <td><?= $data['nama_barang']; ?></td>
                        <td><?= $data['tanggal_perolehan']; ?></td>

                        <!-- mengambil dari tabel ruangan. bisa dipanggil
                        karena sudah kita join tabel inventaris dengan tabel ruangan-->
                        <td><?= $data['nama_ruangan']; ?></td>

                        <!-- mengambil dari tabel kondisi. bisa dipanggil
                        karena sudah kita join tabel inventaris dengan tabel kondisi -->
                        <td><?= $data['keterangan_kondisi']; ?></td>

                        <td><?= $data['keterangan']; ?></td>

                    </tr>
                <?php endforeach; ?>
        </table>

    </div>

</div>


<?= $this->endSection(); ?>