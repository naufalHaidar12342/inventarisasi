<div class="container d-flex flex-column align-items-center">
    <!-- baris untuk kode barang dan NUP SIMAK -->
    <div class="row justify-content-between ms-3 me-4 my-4 w-100">
        <div class="col-5">
            <!-- kode barang -->
            <!-- <div class="col-12 d-flex flex-row mb-4">
                <label for="kode-barang" class=" w-25 col-form-label">Kode Barang</label>
                <input type="text" class="form-control ms-2 shadow" id="kode-barang" name="kode-barang" disabled>
            </div> -->

            <div class="col-12 d-flex flex-row mb-4">
                <label for="nama-barang" class="w-25 col-form-label">Nama Barang</label>
                <input type="text" class="form-control ms-2 shadow" id="nama-barang" name="nama-barang" required autofocus>

                <!-- <div class="invalid-feedback mt-1">
                   
                </div> -->
            </div>

            <div class="col-12 d-flex flex-row mb-4">
                <label for="kondisi" class=" col-form-label w-25">Kondisi</label>
                <select name="kondisi" id="kondisi" class="form-select ms-2 shadow" required>
                    <!-- pesan validasi error, dibungkus dengan invalid-feedback milik bootstrap -->
                    <!-- <div class="invalid-feedback mt-1">
                        
                    </div> -->

                    <!-- opsi yang harus dipilih -->
                    <option value="#">Pilih kondisi</option>

                    <!-- memanggil opsi dari dalam tabel kondisi -->
                    <?php
                    $kondisi = model('App\Models\KondisiModel');
                    $shows = $kondisi->findAll(); ?>

                    <?php foreach ($shows as $data) : ?>
                        <option value="<?= $data['id']; ?>"><?= $data['keterangan_kondisi']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="col-12 d-flex flex-row mb-4">
                <!-- keterangan kondisi -->
                <label for="keterangan-kondisi" class="w-25 col-form-label">Keterangan Kondisi</label>
                <textarea class="form-control shadow ms-2" name="keterangan-keterangan-kondisi" cols="30" rows="4" required>
                </textarea>

                <!-- pesan validasi error, dibungkus dengan invalid-feedback milik bootstrap -->
                <!-- <div class="invalid-feedback mt-1">
                    
                </div> -->
            </div>


            <!-- pemakai -->
            <!-- <div class="col-12 d-flex flex-row mb-4">
                <label for="pemakai" class=" col-form-label w-25">Pemakai</label>
                <input type="text" class="form-control ms-2 shadow" id="pemakai" name="pemakai" disabled>
            </div> -->

        </div>

        <div class="col-5">
            <!-- nup simak -->
            <!-- <div class="col-12 d-flex flex-row mb-4">
                <label for="nup-simak" class="w-25 col-form-label">NUP SIMAK</label>
                <input type="text" class="form-control ms-2 shadow" id="nup-simak" name="nup-simak" disabled>
            </div> -->

            <!-- keterangan kondisi -->
            <!-- <div class="col-12 d-flex flex-row mb-4">
                <label for="keterangan-kondisi" class="w-25 col-form-label">Keterangan Kondisi</label>
                <textarea class="form-control shadow ms-2" name="keterangan-kondisi" id="" cols="30" rows="2"></textarea>
            </div> -->

            <div class="col-12 d-flex flex-row mb-4">
                <!-- keterangan ruangan -->
                <label for="keterangan-ruangan" class="col-form-label w-25">Keterangan Ruangan</label>
                <select class="form-select shadow ms-2" name="keterangan-ruangan" required>

                    <!-- pesan validasi error, dibungkus dengan invalid-feedback milik bootstrap -->
                    <!-- <div class="invalid-feedback">

                    </div> -->

                    <option value="">Pilih ruangan</option>
                    <?php
                    $kondisi = model('App\Models\RuanganModel');
                    $shows = $kondisi->findAll(); ?>
                    <?php foreach ($shows as $data) : ?>
                        <option value="<?= $data['id'] ?>"><?= $data['nama_ruangan'] ?></option>
                    <?php endforeach; ?>

                </select>
            </div>
            <div class="col-12 d-flex flex-row mb-4">
                <label for="tgl-perolehan" class="col-form-label w-25">Tanggal Perolehan</label>
                <input type="date" id="tgl-perolehan" name="tgl-perolehan" class="form-control shadow ms-2" required>

                <!-- pesan validasi error, dibungkus dengan invalid-feedback milik bootstrap -->
                <!-- <div class="invalid-feedback">
                    
                </div> -->
            </div>
        </div>
    </div>

    <!-- baris untuk tombol submit dan reset  -->
    <div class="row d-flex my-4">
        <div class="col-12">
            <button type="submit" class="btn btn-primary mx-2 shadow" name="submit">
                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                Submit
            </button>

            <button type="reset" class="btn btn-warning mx-2 shadow">
                <i class="bi bi-arrow-counterclockwise"></i>
                Reset
            </button>
        </div>
    </div>

</div>