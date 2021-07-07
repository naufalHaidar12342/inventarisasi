<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<h2 class="fs-3 text-center mb-5 mt-5"> Input Barang Berlebih</h2>
<!-- tombol kembali ke halaman sebelumnya -->
<a class="btn btn-primary col-1 mt-5 ms-5 mb-4" href="/Inventarisasi/pindah">
    <i class="bi bi-box-arrow-left "></i>
    Kembali
</a>

<!-- bagian menampilkan ruangan dan pengurus -->
<form action="">
    <?= csrf_field(); ?>

    <div class="container d-flex flex-row">
        <div class="row justify-content-between ms-3 me-4 my-4 w-100">
            <div class="col-5">
                <!-- kolom kiri -->
                <div class="col-12 d-flex flex-row">
                    <label for="Ruangan" class="col-form-label w-25">Ruangan</label>
                    <input type="text" class="form-control">
                </div>

            </div>

            <div class="col-6">
                <!-- kolom kanan -->
                <div class="col-12 d-flex flex-row">
                    <label for="PengurusBarang" class="col-form-label w-25">Pengurus Barang</label>
                    <input type="text" class="form-control ms-">
                </div>
            </div>

        </div>
    </div>
</form>


<div class="row ms-3">
    <div class="container">
        <!-- tombol untuk menambah data -->
        <a class="btn btn-success col-1 mt-5 ms-4" href="/Inventarisasi/inputCS">
            <i class="bi bi-pencil-square"></i>
            Tambah Data
        </a>
        <!-- tombol untuk edit data -->
        <a class="btn btn-warning col-1 mt-5 ms-2" href="#">
            <i class="bi bi-pencil-square"></i>
            Edit
        </a>
    </div>

</div>

<!-- tabel berisi barangnya -->

<div class="table-responsive mt-5 ms-5 me-5">
    <table class="table table-bordered">
        <thead>
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
            <?php $i; ?>
            <!--baris tabel  -->
            <tr>
                <!-- isi dari tiap kolom. mengisinya dari kiri ke kanan -->
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>

            </tr>
        </tbody>
    </table>

</div>



<?= $this->endSection(); ?>