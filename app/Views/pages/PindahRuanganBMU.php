<?= $this->extend('layout/template'); ?>


<?= $this->section('content'); ?>

<!-- heading/tulisan sebagai judul -->
<h2 class="fs-3 text-center mb-5 mt-5"> Pindah Ruangan BMU</h2>


<!-- form untuk menampilkan nama ruangan, dsb -->
<div class="container d-flex flex-column">
    <div class="row justify-content-between ms-3 me-4 my-4 w-100">
        <div class="col-5">
            <div class="col-12 d-flex flex-row mb-4">
                <!-- ruangan asal -->
                <label for="ruanganAsal" class="w-25 col-form-label">Ruangan Asal</label>
                <input type="text" name="ruangan-asal" id="ruangan-asal" class="form-control ms-2">
                <!-- ruangan tujuan -->
                <label for="ruanganTujuan" class="w-25 col-form-label">Ruangan Tujuan</label>
                <input type="text" name="ruangan-tujuan" id="ruangan-tujuan" class="form-control ms-2">
            </div>

        </div>

        <div class="col-5">
            <div class="col-12">
                <!-- ruangan asal -->
                <label for="pengirim" class="w-25 col-form-label">Pengirim</label>
                <input type="text" name="pengirim" id="" class="form-control ms-2">
                <!-- ruangan tujuan -->
                <label for="penerima" class="w-25 col-form-label">Penerima</label>
                <input type="text" name="penerima" id="penerima" class="form-control ms-2">

            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>