<style>
    .fixed-size {
        width: 100%;
        max-width: auto;
        height: 300px;
        min-height: 310px;
        /* Ensure the card maintains a minimum height */
        overflow-y: auto;
    }

    .centered-section {
        display: flex;
        justify-content: flex-start;
        /* Change from center to flex-start */
        align-items: flex-start;
        /* Change from center to flex-start */
        flex-wrap: wrap;
    }

    .centered-section .card {
        margin: 10px;
        flex: 0 0 calc(33.33% - 20px);
        /* Use calc to account for margins */
        max-width: calc(33.33% - 20px);
        background: linear-gradient(135deg, #32a852, #0d4a1d);
        /* Gradient background */
    }

    .section-title {
        text-align: center;
    }

    /* Media Queries for Mobile */
    @media (max-width: 768px) {
        .centered-section .card {
            flex: 1 1 45%;
            /* Adjust to 2 cards per row on tablets */
            max-width: 45%;
        }
    }

    @media (max-width: 576px) {
        .centered-section .card {
            flex: 1 1 90%;
            /* Adjust to 1 card per row on mobile */
            max-width: 90%;
        }
    }
</style>

<!-- Start::app-content -->
<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div class="my-auto">
                <h5 class="page-title fs-21 mb-1">Selamat Datang <code><?= $this->session->name ?></code></h5>
            </div>

        </div>
        <!-- Page Header Close -->

        <!-- row1 -->
        <div class="row">
            <!-- mykonten -->
           <div class="col-sm-12 col-md-10">
                <div class="card overflow-hidden">
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title fs-20">Informasi terbaru saat ini</h4>
                        </div>
                    </div>
                    <div class="rating-scroll">
                        <?php foreach ($announcements as $im) : ?>
                            <div class="px-3 py-3 border-bottom">
                                <div class="media mt-0">
                                    <div class="media-body">
                                        <div class="d-flex">
                                            <h6 class="mt-0 mb-0  fw-medium fs-14"> <?= anchor('mhs_download/' . $im->file_pisik, '' . $im->Announce_title . ' </h5>', ['class' => 'announcement-link']) ?></h6>
                                            <small class="ms-auto text-end"><code>Tanggal Update <?= $im->Announce_date ?></code></small>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="card-footer ">
                        <div class="position-absolute bottom-0 start-50 translate-middle-x " style="margin-bottom: 6px;"><a href="<?= base_url()?>mahasiswa/arsip_berita_mahasiswa" class="link-success fw-semibold fs-12">ARSIP BERITA MAHASISWA</a></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-12 col-lg-6">
                <div class="card">
                    <div class="card-header pb-1">
                        <h3 class="card-title mb-2">Data Singkat Mahasiswa</h3>

                    </div>
                    <div class="product-timeline card-body pt-2 mt-1">
                        <ul class="timeline-1 mb-0">
                            <li class="mt-0"> <i class="fe fe-pie-chart bg-primary-gradient text-fixed-white product-icon"></i> <span class="fw-medium mb-4 fs-14">Nim</span>
                                <p class="mb-0 text-muted fs-12"><?php echo $mhs->nim; ?></p>
                            </li>
                            <li class="mt-0"> <i class="fe fe-home bg-danger-gradient text-fixed-white product-icon"></i> <span class="fw-medium mb-4 fs-14">Kelas</span>
                                <p class="mb-0 text-muted fs-12"><?php echo $mhs->kd_lokal; ?></p>
                            </li>
                            <li class="mt-0"> <i class="fe fe-bar-chart bg-success-gradient text-fixed-white product-icon"></i> <span class="fw-medium mb-4 fs-14">semester</span>
                                <p class="mb-0 text-muted fs-12"><?php $semester = preg_replace('/[^0-9]/', '', explode('.', $mhs->kd_lokal)[1]);
                                                                    echo $semester; ?>

                                </p>
                            </li>
                            <li class="mt-0"> <i class="fe fe-box bg-warning-gradient text-fixed-white product-icon"></i> <span class="fw-medium mb-4 fs-14">Jurusan</span>
                                <p class="mb-0 text-muted fs-12"><?php echo $studi->nm_jrs; ?></p>
                            </li>
                            <li class="mt-0"> <i class="fe fe-shield bg-info-gradient text-fixed-white product-icon"></i> <span class="fw-medium mb-4 fs-14">Status</span>
                                <p class="mb-0 text-muted fs-12">Aktif</p>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
       
        <!-- row -->
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-primary-gradient  border-0">
                        <div class="card bg-info-gradient  shadow-none border-0 custom-rounded " style=" border-bottom-right-radius: 500px; ">
                            <h6 class="mb-1 mt-2 px-3 fs-20 text-fixed-white "> Pembayaran Sertifikasi</h6>
                        </div>
                        <div class="px-3 pt-3  pb-2 pt-0" style="margin-top: -20px;">
                        <div class="pb-0 mt-0">
                            <div class="div">
                                <i class="fa-solid fa-wand-magic-sparkles" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 100px; color: rgba(255, 255, 255, 0.1); z-index: 0;"></i>
                            </div>
                            <div class="card overflow-auto bg-transparent shadow-none border-0" style="max-height: 70px; position: relative; z-index: 1;">
                                <a class="mb-2 fs-15  text-fixed-white " href="<?= base_url('Mahasiswa/daftar_sertifikasi') ?>"> Pendaftaran</a>
                                <a class="mb-2 fs-15  text-fixed-white" href="<?= base_url('Mahasiswa/test') ?>">Test PHP</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-danger-gradient  border-0">
                        <div class="card bg-info-gradient  shadow-none border-0 custom-rounded " style=" border-bottom-right-radius: 500px; ">
                            <h6 class="mb-1 mt-2 px-3 fs-20 text-fixed-white "> Download SK Akreditasi</h6>
                        </div>
                        <div class="px-3 pt-3  pb-2 pt-0" style="margin-top: -20px;">
                        <div class="pb-0 mt-0">
                            <div class="div">
                                <i class="fa-solid fa-camera-retro" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 100px; color: rgba(255, 255, 255, 0.1); z-index: 0;"></i>
                            </div>
                            <div class="card overflow-auto bg-transparent shadow-none border-0" style="max-height: 70px; position: relative; z-index: 1;">
                            <a class="mb-2 fs-15  text-fixed-white " href="<?= base_url('Mahasiswa/daftar_sertifikasi') ?>"> Pendaftaran</a>
                            <a class="mb-2 fs-15  text-fixed-white" href="#">Aksi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-success-gradient  border-0">
                        <div class="card bg-info-gradient  shadow-none border-0 custom-rounded " style=" border-bottom-right-radius: 500px; ">
                            <h6 class="mb-1 mt-2 px-3 fs-20 text-fixed-white ">Kuesioner</h6>
                        </div>
                        <div class="px-3 pt-3  pb-2 pt-0" style="margin-top: -20px;">
                        <div class="pb-0 mt-0">
                            <div class="div">
                                <i class="fa-solid fa-cloud" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 100px; color: rgba(255, 255, 255, 0.1); z-index: 0;"></i>
                            </div>
                            <div class="card overflow-auto bg-transparent shadow-none border-0" style="max-height: 70px; position: relative; z-index: 1;">
                            <a class="mb-2 fs-15  text-fixed-white " href="<?= base_url('Mahasiswa/daftar_sertifikasi') ?>"> Pendaftaran</a>
                                <a class="mb-2 fs-15  text-fixed-white" href="#">Pilih Perguruan Tinggi</a>
                                <a class="mb-2 fs-15  text-fixed-white" href="#">Aksi 1</a>
                                <a class="mb-2 fs-15  text-fixed-white" href="#">Aksi 2</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-warning-gradient  border-0">
                        <div class="card bg-info-gradient  shadow-none border-0 custom-rounded " style=" border-bottom-right-radius: 500px; ">
                            <h6 class="mb-1 mt-2 px-3 fs-20 text-fixed-white ">Judul</h6>
                        </div>
                        <div class="px-3 pt-3  pb-2 pt-0" style="margin-top: -20px;">
                        <div class="pb-0 mt-0">
                            <div class="div">
                                <i class="fa-solid fa-cloud" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 100px; color: rgba(255, 255, 255, 0.1); z-index: 0;"></i>
                            </div>
                            <div class="card overflow-auto bg-transparent shadow-none border-0" style="max-height: 70px; position: relative; z-index: 1;">
                            <a class="mb-2 fs-15  text-fixed-white " href="<?= base_url('Mahasiswa/daftar_sertifikasi') ?>"> Pendaftaran</a>
                            <a class="mb-2 fs-15  text-fixed-white" href="#">Aksi Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt maiores cum eaque, qui totam ullam sapiente nihil </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-success-gradient  border-0">
                        <div class="card bg-info-gradient  shadow-none border-0 custom-rounded " style=" border-bottom-right-radius: 500px; ">
                            <h6 class="mb-1 mt-2 px-3 fs-20 text-fixed-white ">Kuesioner</h6>
                        </div>
                        <div class="px-3 pt-3  pb-2 pt-0" style="margin-top: -20px;">
                        <div class="pb-0 mt-0">
                            <div class="div">
                            <i class="fa-solid fa-bell" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 100px; color: rgba(255, 255, 255, 0.1); z-index: 0;"></i>
                            </div>
                            <div class="card overflow-auto bg-transparent shadow-none border-0" style="max-height: 70px; position: relative; z-index: 1;">
                            <a class="mb-2 fs-15  text-fixed-white " href="<?= base_url('Mahasiswa/daftar_sertifikasi') ?>"> Pendaftaran</a>
                                <a class="mb-2 fs-15  text-fixed-white" href="<?= base_url('Pdf/test_pdfsuketmhs') ?>">Test PDF Suket</a>
                                <a class="mb-2 fs-15  text-fixed-white" href="#">Aksi 1</a>
                                <a class="mb-2 fs-15  text-fixed-white" href="#">Aksi 2</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-success-gradient  border-0">
                        <div class="card bg-info-gradient  shadow-none border-0 custom-rounded " style=" border-bottom-right-radius: 500px; ">
                            <h6 class="mb-1 mt-2 px-3 fs-20 text-fixed-white ">Kuesioner</h6>
                        </div>
                        <div class="px-3 pt-3  pb-2 pt-0" style="margin-top: -20px;">
                        <div class="pb-0 mt-0">
                            <div class="div">
                            <i class="fa-solid fa-pen-nib" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 100px; color: rgba(255, 255, 255, 0.1); z-index: 0;"></i>
                            </div>
                            <div class="card overflow-auto bg-transparent shadow-none border-0" style="max-height: 70px; position: relative; z-index: 1;">
                            <a class="mb-2 fs-15  text-fixed-white" href="<?= base_url('Pdf/test_pdfskdo') ?>">Test PDF Skdo</a>
                                <a class="mb-2 fs-15  text-fixed-white" href="#">Pilih Perguruan Tinggi</a>
                                <a class="mb-2 fs-15  text-fixed-white" href="#">Aksi 1</a>
                                <a class="mb-2 fs-15  text-fixed-white" href="#">Aksi 2</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row closed -->
    </div>
</div>
<!-- End::app-content -->
