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
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                1. Pendaftaran Aktivasi Mahasiswa Keluar
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                    <?= $this->session->flashdata('message'); ?>
                                        <form id="mainForm" method="post" action="<?=  base_url('#');?>">
                                            <div class="form-group" style="margin-bottom: 15px;">
                                                <label for="#" style="display: block; margin-bottom: 5px; color: black;">NIM Lama</label>
                                                <input type="text" class="form-control" id="#" name="#" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                                            </div>
                                            <div class="form-group" style="margin-bottom: 15px;">
                                                <label for="password" style="display: block; margin-bottom: 5px; color: black;">Tanggal Lahir:</label>
                                                <input type="password" class="form-control" id="password" name="password" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                                            </div>
                                            
                                            <button type="submit" class="btn btn-success-gradient rounded-pill btn-wave" style="width: 100%; padding: 10px; border: none; border-radius: 4px; margin-top: 10px; cursor: pointer; background-color: #007bff; color: white;">Daftar Aktivasi</button>
                                        </form>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                2. Pembayaran Aktivasi Mahasiswa Keluar (Setelah Mendaftar)
                                </div>
                                
                            </div>
                            <div class="card-body">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                    <?= $this->session->flashdata('message'); ?>
                                        <form id="mainForm" method="post" action="<?=  base_url('#');?>">
                                            <div class="form-group" style="margin-bottom: 15px;">
                                                <label for="#" style="display: block; margin-bottom: 5px; color: black;">No. Formulir:</label>
                                                <input type="text" class="form-control" id="#" name="#" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                                            </div>
                                            <div class="form-group" style="margin-bottom: 15px;">
                                                <label for="password" style="display: block; margin-bottom: 5px; color: black;">Passsword:</label>
                                                <input type="password" class="form-control" id="password" name="password" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
                                            </div>
                                            
                                            <button type="submit" class="btn btn-success-gradient rounded-pill btn-wave" style="width: 100%; padding: 10px; border: none; border-radius: 4px; margin-top: 10px; cursor: pointer; background-color: #007bff; color: white;"> Aktivasi</button>
                                        </form>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
