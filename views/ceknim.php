<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header justify-content-between">
                <div class="card-title">
                    <h5>Selamat datang di fasilitas layanan kemahasiswaan BSI </h5>
                    <p class="subtitle text-muted fs-12 fw-normal">
                    <h6>
                        <br><br>
                        Fasilitas ini merupakan salah satu bentuk pelayanan dari pihak pengelola BSI dalam menyediakan informasi akademik kemahasiswaan, dan diharapkan seluruh mahasiswa BSI yang masih aktif dapat memperoleh informasi tersebut dengan mudah melalui fasilitas ini
                        <br><br>
                        Terima kasih. Sukses selalu untuk Anda.
                    </h6>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12 d-flex justify-content-center">
        <div class="card custom-card" style="width: 100%; max-width: 800px;">
            <div class="card-header  text-center d-block p-2  mb-1 rounded">
                <div class="card-title ">
                    Cek Nim Baru
                </div>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <label for="nama_mahasiswa" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control " id="nama_mahasiswa" value="<?php echo $user->nm_mhs; ?>" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nim_lama" class="col-sm-2 col-form-label">NIM Lama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control " id="nim_lama" value="<?php echo $user->nim_lama; ?>" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kelas_lama" class="col-sm-2 col-form-label">Kelas Lama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control " id="kelas_lama" value="<?php echo $user->kd_lokal; ?>" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nim_baru" class="col-sm-2 col-form-label">NIM Baru</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control " id="nim_baru" value="<?php echo $user->nim_baru; ?>" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kelas_baru" class="col-sm-2 col-form-label">Kelas Baru</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control " id="kelas_baru" value="<?php echo $user->kd_lokal_baru; ?>" readonly>
                    </div>
                </div>
            </div>
            <div class="row mb-3  mt-3 justify-content-center">
                <button type="button" class="btn btn-outline-success rounded-pill btn-wave" id="success-button-1" style="width: auto;">Klik Untuk Pembaharuan Data</button>
            </div>
        </div>
    </div>
</div>


</div>