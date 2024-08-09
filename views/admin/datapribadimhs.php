 <!-- Start::app-content -->
 <div class="main-content app-content">
            <div class="container-fluid">

                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title fs-21 mb-1">Data Pribadi <?php echo $name; ?></h5>
                        <nav>
                            
                        </nav>
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
    <p>N I M	:	<?= $mhs->nim ?></p>
<p>Nama	:	<?= $mhs->nm_mhs ?></p>
<p>Tempat Lahir	:	<?= $mhs->t_lhr ?></p>
<p>Tanggal Lahir	:	<?= $mhs->tgl_lhr ?></p>
<p>Alamat	:	<?= $mhs->alm ?></p>
<p>RT/RW	:	<?= $mhs->rt_rw ?></p>
<p>Kelurahan	:	<?= $mhs->kelurahan ?></p>
<p>Kecamatan	:	<?= $mhs->kecamatan ?></p>
<p>Kota	:	<?= $mhs->kota ?></p>
<p>Kode Pos	:	<?= $mhs->kd_pos ?></p>
<p>Telepon	:	<?= $mhs->telp ?></p>
<p>E-mail	:	<?= $mhs->emailaddress ?></p>
<p>Jenis Kelamin	:	<?= ($mhs->jen_kel == 'L') ? 'Laki-Laki' : 'Perempuan' ?></p>
<p>Agama	:	<?= $agm->nm_agama ?></p>
        <!-- Content for DATA PRIBADI tab -->
    </div>
    <div class="tab-pane border-0 p-0" id="akademik">
        <p>Program Studi	:	<?= $mhs->prodi ?></p>
<p>Tahun Masuk	:	<?= $mhs->th_masuk_real ?></p>
<p>Pilihan Waktu	:	<?= $mhs->prodi ?></p>
<p>Lokasi Cabang	:	<?= $mhs->prodi ?></p>
<p>Kelas	:	<?= $mhs->prodi ?></p>
<p>Lokal	:	<?= $mhs->prodi ?></p>
<p>Semester Aktif	:	4</p>
<p>Kondisi Aktif	:	Aktif</p>
<p>Kondisi Biaya Kuliah	:	Lunas Biaya Kuliah</p>
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
