<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<h2 class="fs-3 text-center mb-5 mt-5"> Input Barang Berlebih</h2>

<!-- tombol kembali ke halaman sebelumnya -->
<a class="btn btn-primary col-1 mt-5 ms-4 mb-5" href="/Inventarisasi/pindah">
    <i class="bi bi-box-arrow-left "></i>
    Kembali
</a>


</div>
<form action="">
    <div class="row justify-content-between pe-5 ps-4">

        <!-- kolom kiri -->
        <div class="col-5 d-flex flex-row">
            <label for="Ruangan" class="col-form-label me-4">Ruangan</label>
            <input type="text" class="form-control">
        </div>
        <!-- kolom kanan -->
        <div class="col-5 d-flex flex-row flex">
            <label for="PengurusBarang" class="col-form-label me-4">Pengurus Barang</label>
            <input type=" text" class="form-control">

        </div>
    </div>
</form>


<!-- baris untuk tombol -->
<div class="row">
    <div class="container">
        <!-- tombol untuk menambah data -->
        <a class="btn btn-success col-1 mt-5 ms-4" href="#">
            <i class="bi bi-pencil-square"></i>
            Tambah Data
        </a>
        <!-- tombol untuk edit data -->
        <a class="btn btn-warning col-1 mt-5 ms-4" href="#">
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