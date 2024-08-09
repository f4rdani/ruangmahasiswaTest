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
        <!-- <div class="card custom-card">



            <div class="row" style="padding: 20px;">
                <h4 class="text-center" style="width: 100%;"> Cek Nim Baru/Surat Keluar/Surat DO</h4>
            </div>
            <ul class="list-inline font-12 text-center">
            </ul>
            <form method="post" action="<?= base_url('Welcome/login_ceknim'); ?>">
                <?= $this->session->flashdata('message'); ?>

                <div style="width: 100%; max-width: 800px; margin: 0 auto; border: 1px solid rgba(1, 1, 1, 0.3); border-radius: 8px; padding: 20px; text-align: center; margin-bottom: 10px;">
                    <div class="form-group" style="display: flex; justify-content: space-around; align-items: center;">
                        <div style="flex: 1; margin: 10px;">
                            <label for="nim" style="display: block; margin-bottom: 5px; ">NIM</label>
                            <input type="text" class="form-control" id="nim" name="nim" style="padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                        </div>
                        <div style="flex: 1; margin: 10px;">
                            <label for="pilih" style="display: block; margin-bottom: 5px; ">Pilih:</label>
                            <select class="form-control" id="pilih" name="pilih" style="padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                                <option value="nimbaru">Cek Nim Baru</option>
                                <option value="suratsk">Cek Surat SK</option>
                            </select>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-success-gradient rounded-pill btn-wave" style="width: 200px; padding: 10px; border: none; border-radius: 4px; margin-top: 20px; cursor: pointer; background-color: #007bff; color: white;">Submit</button>
                </div>
            </form>

        </div> -->
    </div>
</div>

<div class="row">
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header">
                <div class="card-title">
                Cek Nim Baru/Surat Keluar/Surat DO
                </div>
            </div>
            <div class="card-body">
                <nav class="nav nav-pills flex-column flex-sm-row" role="tablist">
                    <a class="flex-sm-fill text-sm-center nav-link active" data-bs-toggle="tab" role="tab" aria-current="page" href="#pill-flex-home" aria-selected="true">Cek Nim Baru</a>
                    <a class="flex-sm-fill text-sm-center nav-link" data-bs-toggle="tab" role="tab" aria-current="page" href="#pill-flex-big" aria-selected="false">Cek Surat Keterangan DO</a>
                </nav>
                <div class="tab-content">
                    <div class="tab-pane show active text-muted" id="pill-flex-home" role="tabpanel">
                    <form method="post" action="<?= base_url('Welcome/login_ceknim'); ?>">
                <?= $this->session->flashdata('message'); ?>

                <div style="width: 100%; max-width: 800px; margin: 0 auto; border: 1px solid rgba(1, 1, 1, 0.3); border-radius: 8px; padding: 20px; text-align: center; margin-bottom: 10px;">
                    <div class="form-group" style="display: flex; justify-content: space-around; align-items: center;">
                        <div style="flex: 1; margin: 10px;">
                            <label for="nim" style="display: block; margin-bottom: 5px; ">NIM Lama</label>
                            <input type="text" class="form-control" id="nim" name="nim" style="padding: 10px; border: 1px solid #ccc; border-radius: 4px;"  placeholder="1722xxxx">
                            <input type="hidden" class="form-control" id="pilih" name="pilih" value="nimbaru">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success-gradient rounded-pill btn-wave" style="width: 200px; padding: 10px; border: none; border-radius: 4px; margin-top: 20px; cursor: pointer; background-color: #007bff; color: white;">Cek Nim Baru</button>
                </div>
            </form>
                    </div>
                    <div class="tab-pane text-muted" id="pill-flex-big" role="tabpanel">
                    <form method="post" action="<?= base_url('Welcome/login_ceknim'); ?>">
                <?= $this->session->flashdata('message'); ?>

                <div style="width: 100%; max-width: 800px; margin: 0 auto; border: 1px solid rgba(1, 1, 1, 0.3); border-radius: 8px; padding: 20px; text-align: center; margin-bottom: 10px;">
                    <div class="form-group" style="display: flex; justify-content: space-around; align-items: center;">
                        <div style="flex: 1; margin: 10px;">
                            <label for="nim" style="display: block; margin-bottom: 5px; ">NIM Anda</label>
                            <input type="text" class="form-control" id="nim" name="nim" style="padding: 10px; border: 1px solid #ccc; border-radius: 4px;"  placeholder="1722xxxx">
                            <input type="hidden" class="form-control" id="pilih" name="pilih" value="suratsk">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success-gradient rounded-pill btn-wave" style="width: 200px; padding: 10px; border: none; border-radius: 4px; margin-top: 20px; cursor: pointer; background-color: #007bff; color: white;">Cek SK DO</button>
                </div>
            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End:: row-13 -->