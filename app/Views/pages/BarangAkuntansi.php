<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<h2 class="fs-3 text-center mb-5 mt-5"> Input Barang Berlebih</h2>
<!-- tombol kembali ke halaman sebelumnya -->
<div class="container d-flex flex-column align-items-start">
    <a href="<?= base_url(); ?>/Inventarisasi/pindah" class="btn btn-primary my-4">
        <i class="bi bi-box-arrow-left "></i>
        Kembali
    </a>
</div>


<div class="container d-flex flex-column">
    <div class="row justify-content-between me-4 ms-3 my-4 w-100">
        <!-- kolom kiri -->
        <div class="col-5">
            <div class="col-12 d-flex flex-row mb-4">
                <label for="Ruangan" class="w-25 col-form-label me-2">
                    Ruangan
                </label>
                <input type="text" class="form-control">
            </div>

        </div>
        <!-- kolom kanan -->
        <div class="col-5">
            <div class="col-12 d-flex flex-row mb-4">
                <label for="PengurusBarang" class=" w-25 col-form-label me-2">
                    Pengurus Barang
                </label>
                <input type="text" class="form-control">
            </div>


        </div>
    </div>
</div>



<!-- baris untuk tombol -->
<div class="container d-flex flex-column">
    <div class="row d-flex my-4">
        <div class="col-12">
            <a href="/Inventarisasi/inputAcct" class="btn btn-success">
                <i class="bi bi-file-earmark-plus"></i>
                Tambah Data
            </a>
            <a href="" class="btn btn-warning">
                <i class="bi bi-pencil-square"></i>
                Edit Data
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
                <th>Nomer Register</th>
                <th>Kode dan Nama Barang</th>
                <th>NUP</th>
                <th>Uraian Barang</th>
                <th>Tanggal Perolehan</th>
                <th>Keterangan</th>
                <th>Kondisi</th>

            </thead>

            <tbody>
                <!--baris tabel  -->
                <?php
                $callModel = model('App\Models\InventarisModel');
                $index = 1;
                $shows = $callModel->table('inventaris')
                    ->join('kondisi', 'kondisi.id=inventaris.kondisi_id')
                    ->join('ruangan', 'ruangan.id=inventaris.ruangan_id')
                    ->orderBy('tanggal_perolehan', 'DESC')
                    ->getWhere([
                        'ruangan_id' => '3'
                    ])
                    ->getResultArray();
                ?>
                <?php foreach ($shows as $data) :    ?>
                    <tr>
                        <!-- isi dari tiap kolom. mengisinya dari kiri ke kanan -->
                        <td class="text-center align-middle"><?= $index++; ?></td>
                        <td></td>
                        <td><?= $data['nama_barang']; ?></td>
                        <td></td>
                        <td></td>
                        <td><?= $data['tanggal_perolehan']; ?></td>
                        <td><?= $data['nama_ruangan']; ?></td>
                        <td><?= $data['keterangan_kondisi']; ?></td>
                        <td><?= $data['keterangan']; ?></td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>




<?= $this->endSection(); ?>