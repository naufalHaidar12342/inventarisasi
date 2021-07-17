<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<h2 class="fs-3 text-center mb-5 mt-5"> Input Barang Berlebih</h2>
<div class="container">
    <div class="row">
        <div class="col-12">
            <!--hanya menguji apakah alert button sudah sesuai ukurannya  -->
            <!-- <div class="alert alert-success">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                    <use xlink:href="#check-circle-fill" />
                    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                    </symbol>
                </svg>
                Data berhasil masuk! Hooray!
            </div> -->

            <!-- jika dalam session terdapat FlashData, maka akan memanggil pesannya -->
            <?php if (session()->getFlashData('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <!-- tanda centang sebelum pesan. tanda ini menggunakan svg -->
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                        <use xlink:href="#check-circle-fill" />
                        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </symbol>
                    </svg>
                    <!-- mengambil pesan dari setFlashData -->
                    <?= session()->getFlashData('pesan'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

</div>

<!-- tombol kembali ke halaman sebelumnya -->
<div class="container d-flex flex-column align-items-start">
    <!-- base_url mamanggil http://localhost:8080 
    kemudian memanggil '/' , dimana pada app\routes.php, 
    jika diberi argumen '/' , akan memanggil controller dan method yang dituju-->
    <a href="<?= base_url(); ?>/Inventarisasi/pindah" class="btn btn-primary shadow my-4">
        <i class="bi bi-box-arrow-left "></i>
        Kembali
    </a>
</div>

<!-- bagian menampilkan ruangan dan pengurus -->

<div class="container d-flex flex-row">
    <div class="row justify-content-between ms-3 me-4 my-4 w-100">
        <div class="col-5">
            <!-- kolom kiri -->
            <div class="col-12 d-flex flex-row">
                <label for="Ruangan" class="col-form-label w-25">Ruangan</label>
                <?php
                $callModel = model('App\Models\RuanganModel');
                $ruangan = $callModel->getWhere(['id' => '1'])->getResultArray();
                ?>
                <?php foreach ($ruangan as $nama_ruangan) : ?>
                    <input type="text" class="form-control shadow" value="<?= $nama_ruangan['kode_ruangan']; ?> - <?= $nama_ruangan['nama_ruangan']; ?>" readonly>
                <?php endforeach; ?>
            </div>

        </div>
        <!-- kolom kanan untuk pengurus barang-->
        <!-- <div class="col-6">
            <div class="col-12 d-flex flex-row">
                <label for="PengurusBarang" class="col-form-label w-25 me-1">Pengurus Barang</label>
                <input type="text" class="form-control shadow " readonly>
            </div>
        </div> -->

    </div>
</div>


<!-- tombol tambah dan edit -->
<div class="container d-flex flex-column">
    <div class="row d-flex mt-4 mb-3">
        <div class="col-12">
            <a href="<?= base_url(); ?>/Inventarisasi/inputCS" class="btn btn-success shadow">
                <i class="bi bi-file-earmark-plus"></i>
                Tambah Data
            </a>
            <a href="<?= base_url(); ?>/Inventarisasi/editCS" class="btn btn-warning shadow ms-2">
                <i class="bi bi-pencil-square"></i>
                Edit Data
            </a>
        </div>
    </div>
</div>


<!-- tabel berisi barangnya -->
<div class="container d-flex flex-column">
    <div class="table-responsive mt-2 ms-1 me-5">
        <table class="table table-bordered">
            <thead class="text-center align-middle">
                <th>No</th>
                <th>Nama Barang</th>
                <th>Tanggal Perolehan</th>
                <th>Keterangan Ruangan</th>
                <th>Kondisi</th>
                <th>Keterangan Kondisi</th>

            </thead>

            <tbody class="align-middle">
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
                        'ruangan_id' => '1'
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
            </tbody>
        </table>

    </div>

</div>



<?= $this->endSection(); ?>