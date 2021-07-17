<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<h2 class="h2 text-uppercase fs-3 text-center mb-5 mt-5 pt-4">Tentang Kami</h2>

<div class="container d-flex justify-content-center">
    <div class="col-12 col-lg-4">

        <div class="card border-0 shadow mb-5" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="/img/user-svgrepo-com.svg" class="img-fluid rounded-start mx-1 my-1 " alt="...">

                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Naufal Haidar Rauf</h5>
                        <p class="card-text">Mahasiswa Teknik Informatika Universitas Dian Nuswantoro</p>
                        <p class="card-text"> Temukan saya di :</p>

                        <!-- social media link -->
                        <p class="card-text">

                            <!-- link akun github -->
                            <a href="https://github.com/naufalHaidar12342" class="mx-2">
                                <i class="bi bi-github"></i>
                            </a>

                            <!-- telegram -->
                            <a href="#" class="mx-2">
                                <i class="bi bi-telegram"></i>
                            </a>
                        </p>


                        <!-- <small class="text-muted">Last updated 3 mins ago</small> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Fauzan abiyyu dzaky -->
        <div class="card border-0 shadow mb-3 mt-5" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="/img/user-svgrepo-com.svg" class="img-fluid rounded-start mx-1 my-1 " alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Fauzan Abiyyu Dzaky</h5>
                        <p class="card-text">Mahasiswa Teknik Informatika Universitas Dian Nuswantoro</p>
                        <p class="card-text"> Temukan saya di :</p>

                        <p class="card-text">
                            <!-- github -->
                            <a href="https://github.com/fabiyudzaky" class="mx-2">
                                <i class="bi bi-github"></i>
                            </a>

                            <!-- telegram -->
                            <a href="#" class="mx-2">
                                <i class="bi bi-telegram"></i>
                            </a>
                        </p>

                        <!-- <small class="text-muted">Last updated 3 mins ago</small> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>