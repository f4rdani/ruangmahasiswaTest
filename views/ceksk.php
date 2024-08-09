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
            <div class="card-header justify-content-between text-center d-block p-2 bg-danger-transparent mb-1 rounded">
                <div class="card-title ">
                    Cek Surat Keterangan DO
                </div>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <label for="nim_lama" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control " id="nim_lama" value="<?php echo $user->nim; ?>" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nim_baru" class="col-sm-2 col-form-label">Kelas</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control " id="nim_baru" value="<?php echo $user->kd_lokal; ?>" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama_mahasiswa" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control " id="nama_mahasiswa" value="<?php echo $user->nm_mhs; ?>" readonly>
                    </div>
                </div>
                <div class="row mb-3  mt-3 justify-content-center">
                <form action="<?php echo base_url('Pdf/generate_pdfsuratdo'); ?>" method="get">
            <input type="hidden" name="nim" value="<?php echo $user->nim; ?>">
            <input type="hidden" name="nama" value="<?php echo $user->nm_mhs; ?>">
            <button type="submit" class="btn btn-outline-success rounded-pill btn-wave" style="width: auto;">Cetak Surat</button>
        </form>
                </div>
            </div>
        </div>
    </div>
</div>