<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<h2 class="fs-3 text-center mb-5 mt-5"> Tambah Data</h2>

<form action="">

    <?= $this->include('layout/form'); ?>

    <button type="submit" class="btn btn-primary mx-5 my-4">
        <i class="fa fa-paper-plane" aria-hidden="true"></i>
        Submit
    </button>
</form>





<?= $this->endSection(); ?>