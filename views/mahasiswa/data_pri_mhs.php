 <!-- Start::app-content -->
 <div class="main-content app-content">
            <div class="container-fluid">

                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title fs-21 mb-1">Data Pribadi <?= $this->session->userdata('name') ?? 'Mahasiswa' ?></h5>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <p>Catatan :
                                Untuk perubahan data pribadi dibawah ini, Silakan Anda ajukan di menu Surat dan submenu Buat Pengajuan Ubah Biodata atau bisa klik tombol berikut.</p>
                            </ol>
                        </nav>
                    </div>
    
                    <div class="d-flex my-xl-auto right-content align-items-center">
                        <div class="mb-xl-0">
                            <div class="dropdown">
                                <a href="<?= base_url('mahasiswa/suratperubahanbio') ?>"class="btn btn-primary">Ajukan Surat Pengajuan Perubahan Biodata</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page Header Close -->
					
						<div class="card">
							<div class="card-body">
								<div class="tabs-menu ">
									<!-- Tabs -->
									<ul class="nav nav-tabs profile navtab-custom panel-tabs">
										<li class="">
											<a href="#pribadi" data-bs-toggle="tab" class="active" aria-expanded="true"> <span
													class="visible-xs"><i
														class="las la-user-circle fs-16 me-1"></i></span> <span
													class="hidden-xs">DATA PRIBADI</span> </a>
										</li>
										<li class="">
											<a href="#akademik" data-bs-toggle="tab" aria-expanded="false"> <span
													class="visible-xs"><i class="las la-images fs-15 me-1"></i></span>
												<span class="hidden-xs">DATA AKADEMIK</span> </a>
										</li>
									</ul>
								</div>
                                <div class="tab-content border border-top-0 p-4 br-dark">
    <div class="tab-pane border-0 p-0 active" id="pribadi">
    <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Nim</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" value="<?= $mhs->nim; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" value="<?= $mhs->nm_mhs; ?>" readonly>
                                </div>
                            </div>
<div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Tempat lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" value="<?= $mhs->t_lhr; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" value="<?= $mhs->tgl_lhr; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" value="<?= $mhs->alm; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">RT/RW</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" value="<?= $mhs->rt_rw; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Kelurahan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" value="<?= $mhs->kelurahan; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Kecamatan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" value="<?= $mhs->kecamatan; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Kota</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" value="<?= $mhs->kota; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Kode pos</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" value="<?= $mhs->kd_pos; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Telepon</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" value="<?= $mhs->telp; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" value="<?= $mhs->emailaddress; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Jenis kelamin</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" value="<?= $mhs->jen_kel; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Agama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" value="<?= $mhs->agm; ?>" readonly>
                                </div>
                            </div>
        <!-- Content for DATA PRIBADI tab -->
    </div>
    <div class="tab-pane border-0 p-0" id="akademik">
    <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Program Studi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" value="Teknologi Informasi" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Tahun Masuk</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" value="2022" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Pilihan Waktu</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" value="Pagi/Siang" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Lokasi Cabang</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" value="05" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Kelas</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" value="4A" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Lokal</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" value="05" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Semester Aktif</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" value="4" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Kondisi Aktif</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" value="Aktif" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Kondisi Biaya Kuliah</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" value="Sudah di Lunasi" readonly>
                                </div>
                            </div>
    </div>
</div>
								
									

							</div>
						</div>
					</div>
				</div>
                <!--End::row-1 -->

            </div>
        </div>
        <!-- End::app-content -->
