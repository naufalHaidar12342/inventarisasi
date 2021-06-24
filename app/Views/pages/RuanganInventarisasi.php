<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- isi halaman RuanganInventarisasi  -->
<h2 class="h2 text-uppercase fs-3 text-center mb-5 mt-5">Pilih Ruangan</h2>
<!-- card untuk pilih ruangan -->
<div class="row justify-content-center g-3">
    <!-- opsi customer service -->
    <div class="col-12 col-lg-4">
        <div class="card m-auto" style="width: 24rem;">
            <!-- source :https://www.pexels.com/photo/stack-of-books-in-shelf-256559/ -->
            <img src="/img/pexels-olha-ruskykh-7504860.jpg" class="card-img-top" alt="bagian-cs">
            <div class="card-body">
                <h5 class="card-title">Customer Service</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                <a href="/Inventarisasi/customerService" class="btn btn-primary">
                    Masuk
                    <i class="bi bi-box-arrow-in-right"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- opsi produksi -->
    <div class="col-12 col-lg-4">
        <div class="card m-auto" style="width: 24rem;">
            <img src="/img/pexels-cleyder-duque-3637786.jpg" class="card-img-top" alt="bagian-produksi">
            <div class="card-body">
                <h5 class="card-title">Produksi</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">
                    Masuk
                    <i class="bi bi-box-arrow-in-right"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- opsi akuntansi -->
    <div class="col-12 col-lg-4 ">
        <div class="card m-auto" style="width: 24rem;">
            <img src="/img/pexels-tima-miroshnichenko-6693630.jpg" class="card-img-top" alt="bagian-akuntansi">
            <div class="card-body">
                <h5 class="card-title">Akuntansi</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">
                    Masuk
                    <i class="bi bi-box-arrow-in-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- tombol kembali ke page sebelumnya -->
<div class="row justify-content-center g-3">
    <a class="btn btn-info col-1 mt-5" href="/">
        <i class="bi bi-box-arrow-left "></i>
        Kembali
    </a>
</div>



<?= $this->endSection(); ?>