<!-- Start::app-content -->
<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-md-12 col-xl-12">
                <div class="main-content-body-invoice">
                    <div class="card card-invoice">
                        <div class="card-body">
                            <h5 class="page-title fs-21 mb-1">FORM PENGAJUAN PERUBAHAN BIODATA</h5>
                            <hr>
                            <?= $this->session->flashdata('message'); ?>

                            <?php if (!$mhs) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <p>
                                        Keterangan:
                                        <br>Untuk KTP, KK, Akte Kelahiran, KTM file yang diupload harus berupa file scan asli, bukan berupa foto. <br>
                                        Untuk Ijazah dan Transkip akhir yang diupload dapat berupa fotokopi yang dilegalisir basah. Demikian informasi ini saya sampaikan
                                    </p>
                                </div>

                                <!-- form -->
                                <form action="<?= base_url('Mahasiswa/suratbio') ?>" method="post" enctype="multipart/form-data">
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <label for="telp" class="form-label">No Telp</label>
                                        <input type="text" class="form-control" id="telp" name="telp" required>
                                    </div>
                                    <hr>
                                    <h6><strong>(type file pdf, size max 2mb)</strong></h6>
                                    <div class="mb-3">
                                        <label for="surat_pengajuan" class="form-label">Upload Surat Pengajuan Perubahan Biodata</label>
                                        <input class="form-control" type="file" id="surat_pengajuan" name="surat_pengajuan" accept=".pdf" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="ktp" class="form-label">Upload KTP</label>
                                        <input class="form-control" type="file" id="ktp" name="ktp" accept=".pdf" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="kk" class="form-label">Upload Kartu Keluarga</label>
                                        <input class="form-control" type="file" id="kk" name="kk" accept=".pdf" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="akte_lahir" class="form-label">Upload Akte Kelahiran</label>
                                        <input class="form-control" type="file" id="akte_lahir" name="akte_lahir" accept=".pdf" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="ktm" class="form-label">Upload KTM</label>
                                        <input class="form-control" type="file" id="ktm" name="ktm" accept=".pdf" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="ijasah" class="form-label">Upload Ijasah</label>
                                        <input class="form-control" type="file" id="ijasah" name="ijasah" accept=".pdf" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="transkip" class="form-label">Upload Transkip Nilai</label>
                                        <input class="form-control" type="file" id="transkip" name="transkip" accept=".pdf" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Kirim Pengajuan</button>
                                </form>
                                <!-- form -->
                            <?php else : ?>
								
                                <div class="alert alert-info" role="alert">
                                    Pengajuan sedang dilakukan.
                                </div>
								<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="<?= $mhs-> email?>" readonly>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label for="telp" class="form-label">No Telp</label>
                                    <input type="text" class="form-control" id="telp" name="telp" value="<?= $mhs-> telp?>" readonly>
                                </div>
								<hr>
                                <h6><strong>(klik view untuk melihat)</strong></h6>
								<div class="mb-3">
									<label for="surat_pengajuan" class="form-label">Upload Surat Pengajuan Perubahan Biodata</label>
									<span class="tag tag-green">
										<a href="<?= base_url('mhsdownload/surat_pengajuan/' . $mhs->surat_pengajuan) ?>" style="color: white;">view_surat_pengajuan_perubahan_biodata</a>
									</span>
								</div>
								<div class="mb-3">
									<label for="ktp" class="form-label">Upload KTP</label>
									<span class="tag tag-green">
										<a href="<?= base_url('mhsdownload/ktp/' . $mhs->ktp) ?>" style="color: white;">view_ktp</a>
									</span>
								</div>
								<div class="mb-3">
									<label for="kk" class="form-label">Upload Kartu Keluarga</label>
									<span class="tag tag-green">
										<a href="<?= base_url('mhsdownload/kk/' . $mhs->kk) ?>" style="color: white;">view_kartu_keluarga</a>
									</span>
								</div>
								<div class="mb-3">
									<label for="akte_lahir" class="form-label">Upload Akte Kelahiran</label>
									<span class="tag tag-green">
										<a href="<?= base_url('mhsdownload/akte_lahir/' . $mhs->akte_lahir) ?>" style="color: white;">view_akte_kelahiran</a>
									</span>
								</div>
								<div class="mb-3">
									<label for="ktm" class="form-label">Upload KTM</label>
									<span class="tag tag-green">
										<a href="<?= base_url('mhsdownload/ktm/' . $mhs->ktm) ?>" style="color: white;">view_ktm</a>
									</span>
								</div>
								<div class="mb-3">
									<label for="ijasah" class="form-label">Upload Ijasah</label>
									<span class="tag tag-green">
										<a href="<?= base_url('mhsdownload/ijasah/' . $mhs->ijasah) ?>" style="color: white;">view_ijazah</a>
									</span>
								</div>
								<div class="mb-3">
									<label for="transkip" class="form-label">Upload Transkip Nilai</label>
									<span class="tag tag-green">
										<a href="<?= base_url('mhsdownload/transkip/' . $mhs->transkip) ?>" style="color: white;">view_transkip_nilai</a>
									</span>
								</div>
			
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div><!-- COL-END -->
        </div>
        <!--End::row-1 -->

    </div>
</div>
<!-- End::app-content -->