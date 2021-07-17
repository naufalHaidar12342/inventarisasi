<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<h2 class="fs-3 text-center mt-5"> Tambah Data</h2>
<h2 class="fs-3 text-center mb-5 "> Akuntansi</h2>

<!-- tombol kembali ke halaman cs -->
<div class="container d-flex flex-column align-items-start">
    <a href="<?= base_url(); ?>/Inventarisasi/akuntansi" class="btn btn-primary my-4 shadow">
        <i class="bi bi-box-arrow-left "></i>
        Kembali
    </a>
</div>

<form action="<?= base_url(); ?>/Inventarisasi/saveAcct" method="post">
    <?= csrf_field(); ?>

    <?= $this->include('layout/form3'); ?>


</form>
<?= $this->endSection(); ?>