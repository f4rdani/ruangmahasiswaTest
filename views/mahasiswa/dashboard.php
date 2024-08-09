<style>
    .fixed-size {
        width: 100%;
        max-width: auto;
        height: 300px;
        min-height: 310px; /* Ensure the card maintains a minimum height */
		overflow-y: auto;		
    }

	.centered-section {
    display: flex;
    justify-content: flex-start; /* Change from center to flex-start */
    align-items: flex-start; /* Change from center to flex-start */
    flex-wrap: wrap;
}

    .centered-section .card {
    margin: 10px;
    flex: 0 0 calc(33.33% - 20px); /* Use calc to account for margins */
    max-width: calc(33.33% - 20px);
	background: linear-gradient(135deg, #32a852, #0d4a1d); /* Gradient background */
}

    .section-title {
        text-align: center;
    }

	/* Media Queries for Mobile */
@media (max-width: 768px) {
    .centered-section .card {
        flex: 1 1 45%; /* Adjust to 2 cards per row on tablets */
        max-width: 45%;
    }
}

@media (max-width: 576px) {
    .centered-section .card {
        flex: 1 1 90%; /* Adjust to 1 card per row on mobile */
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
                <h5 class="page-title fs-21 mb-1">Selamat Datang <code><?= $this->session->name?></code></h5>
            </div>

        </div>
        <!-- Page Header Close -->

<!-- row1 -->
        <div class="row">
            <!-- mykonten -->
            <div class="col-sm-12 col-md-12">
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
                        <div class="position-absolute bottom-0 start-50 translate-middle-x " style="margin-bottom: 6px;"><a href="#" class="link-success fw-semibold fs-12">ARSIP BERITA MAHASISWA</a></div>
                    </div>
                </div>
            </div>
            <!-- <div class=" col-sm-2 col-md-2">
                                <div class="card custom-card bg-success-transparent">
                                    
                                    <div class="card-body">
                                        <h6 class="card-title fw-semibold">Layanan Akademik Kemahasiswaan (LYKAN)</h6>
                                    </div>
                                    <ul class="list-group list-group-flush ">
                                        <li class="list-group-item ">Masuk</li>
                                        <li class="list-group-item">download ptunjuk teknis</li>
                                    </ul>
                                </div>
                        </div> -->
                        <!-- mykonten -->
                    </div>
                    <!-- row 2 -->
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    <div class="col">
                                    <div class="card rounded-4">
                                        <div class="card-body iconfont text-start bg-success rounded-4">
                                            <div class="d-flex justify-content-between">
                                                <h4 class="card-title mb-1 text-light">Pembayaran Sertifikasi</h4>
                                            </div>
                                            <div class="progress mb-3 mt-1" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 5px;">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 100%; height: 5px;"></div>
                                            </div>
                                            <div class="d-flex mb-0">
                                                <div>
                                                    <a class="mb-2 fs-13 text-light" href="<?= base_url('Mahasiswa/daftar_sertifikasi') ?>">Pendaftaran</a>
                                                    <p class="mb-2 fs-13 text-light">Aksi 2</p>
                                                </div>
                                                <div class="card-chart  bg-pink-transparent  rounded-circle ms-auto mt-0">
                                                    <i class="typcn typcn-group-outline bg-warning-transparent text-warning fs-24"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card rounded-4">
                                        <div class="card-body iconfont text-start bg-success rounded-4">
                                            <div class="d-flex justify-content-between">
                                                <h4 class="card-title mb-1 text-light"> Download SK Akreditasi</h4>
                                            </div>
                                            <div class="progress mb-3 mt-1" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 5px;">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 100%; height: 5px;"></div>
                                            </div>
                                            <div class="d-flex mb-0">
                                                <div>
                                                    <a class="mb-2 fs-13 text-light" href="#">Pilih Perguruan Tinggi</a>
                                                    <p class="mb-2 fs-13 text-light">Aksi 2</p>
                                                </div>
                                                <div class="card-chart bg-pink-transparent rounded-circle ms-auto mt-0">
                                                    <i class="typcn typcn-chart-line-outline bg-warning-transparent text-warning fs-24"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="card rounded-4">
                                        <div class="card-body iconfont text-start bg-success rounded-4">
                                            <div class="d-flex justify-content-between">
                                                <h4 class="card-title mb-1 text-light">Kuesioner</h4>
                                            </div>
                                            <div class="progress mb-3 mt-1" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 5px;">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 100%; height: 5px;"></div>
                                            </div>
                                            <div class="d-flex mb-0">
                                                <div>
                                                    <p class="mb-2 fs-13 text-light">Aksi 1</p>
                                                    <p class="mb-2 fs-13 text-light">Aksi 2</p>
                                                </div>
                                                <div class="card-chart  bg-pink-transparent rounded-circle ms-auto mt-0">
                                                    <i class="ti-pulse project bg-warning-transparent text-warning fs-24 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                        

                        <!-- Add another card here if needed -->

                    </div>


                    <!-- row closed -->
        <!-- row closed -->
    </div>
</div>
<!-- End::app-content -->
