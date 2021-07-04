<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<h2 class="fs-3 text-center mb-5 mt-5"> Tambah Data</h2>

<form action="/Inventarisasi/saveCS" method="post">
    <?= csrf_field(); ?>
    <?= $this->include('layout/form'); ?>

    <button type="submit" class="btn btn-primary ms-5 my-4" name="submit">
        <i class="fa fa-paper-plane" aria-hidden="true"></i>
        Submit
    </button>

    <button type="reset" class="btn btn-warning ms-3 my-4">
        <i class="bi bi-arrow-counterclockwise"></i>
        Reset
    </button>
</form>





<?= $this->endSection(); ?>