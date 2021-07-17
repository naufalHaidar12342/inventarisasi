<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<h2 class="h2 text-uppercase fs-3 text-center mb-5 mt-5 pt-4">Daftarkan Akun Anda</h2>


<form action="/Login/register" method="post">
    <?= csrf_field(); ?>

    <div class="container d-flex flex-column align-items-center">

        <div class="row justify-content-md-center my-4 w-50">
            <div class="col-lg">
                <div class="card">
                    <div class="card-header">

                        <p class="fw-bold">Daftar</p>
                        <p class="fst-italic mt-1">Anda harus memiliki akun sebelum melihat halaman</p>
                    </div>

                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <div class="card-body">
                        <div class="col-12 d-flex flex-row mb-4">
                            <label for="email" class=" w-50 col-form-label">Alamat E-mail</label>
                            <input type="email" class="form-control ms-2 <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email">
                        </div>
                        <div class="col-12 d-flex flex-row mb-4">
                            <label for="username" class=" w-50 col-form-label">Username</label>
                            <input type="text" class="form-control ms-2 <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username">
                        </div>
                        <div class="col-12 d-flex flex-row mb-4">
                            <label for="password" class="w-50 col-form-label">Password</label>
                            <input type="password" class="form-control ms-2 <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password">
                        </div>
                        <div class="col-12 d-flex flex-row mb-4">
                            <label for="repeat-password" class="w-50 col-form-label">Ulang Password</label>
                            <input type="password" class="form-control ms-2 <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="re-password">
                        </div>
                        <hr class="mx-5">
                        <div class="row my-3 text-center">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary mx-2" name="submit">
                                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                    Submit
                                </button>

                                <button type="reset" class="btn btn-warning mx-2">
                                    <i class="bi bi-arrow-counterclockwise"></i>
                                    Reset
                                </button>

                                <!-- membuka halaman login bawaan myth/auth -->
                                <!-- <p class="card-text my-3">Sudah punya akun?
                                    <a href="<?= route_to('login') ?>">Masuk</a>
                                </p> -->

                                <!-- membuka halaman login buatan sendiri -->
                                <p class="card-text my-3">Sudah punya akun?
                                    <a href="/Login/index">Masuk</a>
                                </p>

                            </div>
                        </div>

                        <!-- <a href="/Login" class="btn btn-danger mx-2">
                            <i class="bi bi-box-arrow-left"></i>
                            Back
                        </a> -->
                    </div>
                </div>

            </div>
        </div>

        <!-- baris untuk tombol submit dan reset  -->
        <!-- <div class="row d-flex my-4">
            <div class="col-12">
                <button type="submit" class="btn btn-primary mx-2" name="submit">
                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                    Submit
                </button>

                <button type="reset" class="btn btn-warning mx-2">
                    <i class="bi bi-arrow-counterclockwise"></i>
                    Reset
                </button>

                <a href="/Login" class="btn btn-danger mx-2">
                    <i class="bi bi-box-arrow-left"></i>
                    Back
                </a>
            </div>
        </div> -->

    </div>


</form>


<!-- <a href='https://www.freepik.com/free-photos-vectors/people'>People vector created by pch.vector - www.freepik.com</a> -->
<!-- JavaScript Bundle with Popper -->
<?= $this->endSection(); ?>