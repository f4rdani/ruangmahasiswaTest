<!-- Start::app-content -->
<div class="main-content app-content">
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div class="my-auto">
                <h5 class="page-title fs-21 mb-1">Jadwal Kuliah</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <a href="<?= base_url('Pdf/cetak_jadwal_kuliah'); ?>" class="btn btn-primary mb-2">Cetak Jadwal</a>
                        <div class="vtimeline">
                            <?php
                            $current_day = '';
                            $day_count = 0;
                            ?>

                            <?php foreach ($jadwal as $i): ?>
                                <?php

                                $unique_id = strtolower(str_replace(' ', '_', $i->nm_mtk)) . '_' . $i->kd_dosen;

                                // Cek jika hari saat ini berbeda dengan yang sebelumnya, cetak heading hari baru
                                if ($i->hari_t !== $current_day):
                                    if ($current_day !== ''): ?>

                        </div>
                    </div>
                <?php endif;
                                    $current_day = $i->hari_t;
                                    $day_count++;
                ?>


                <div class="timeline-wrapper <?php echo $day_count % 2 == 1 ? '' : 'timeline-inverted'; ?>">
                    <div class="timeline-badge bg-warning-gradient"><i class="las la-business-time"></i></div>
                    <div class="timeline-panel bg-warning-transparent 1 pt-0 px-0">
                        <div class="card bg-warning-gradient shadow-none border-0">
                            <h6 class="mt-2 px-3 fs-20 text-fixed-white text-center"><?php echo $i->hari_t; ?></h6>
                        </div>
                    <?php endif; ?>

                    <div class="timeline-body px-3 mt-3">
                        <a class="d-flex justify-content-between align-items-center bd-gray-800 p-2 rounded" data-bs-toggle="collapse" href="#collapse_<?php echo $unique_id; ?>" role="button" aria-expanded="false" aria-controls="collapse_<?php echo $unique_id; ?>">
                            <p class="mb-0"><?php echo $i->nm_mtk; ?></p>
                            <span class="text"><?php echo $i->jam_t; ?></span>
                        </a>
                        <div class="collapse" id="collapse_<?php echo $unique_id; ?>">
                            <div class="card mb-0 shadow-none p-2 rounded">
                                Download Bahan Ajar :
                                <span> <i class="fa fa-file px-2" aria-hidden="true"></i>RPS</span>
                                <span><i class="fa fa-file px-2" aria-hidden="true"></i> SILABUS</span>
                                <span><i class="fa fa-file px-2" aria-hidden="true"></i> SLIDE</span>
                                <span><i class="fa fa-file px-2" aria-hidden="true"></i> RTM</span>
                                <span><i class="fa fa-file px-2" aria-hidden="true"></i> MODUL</span>
                            </div>
                        </div>
                        <div class="bg-info-transparent p-2 d-flex rounded justify-content-between align-items-center">
                            <p class="mb-0">Kode dosen: <?php echo $i->kd_dosen; ?></p>
                            <span class="text">Ruangan: <?php echo $i->no_ruang; ?></span>
                        </div>
                    </div>

                <?php endforeach; ?>
                <?php if ($current_day !== ''): ?>
                    <!-- Tutup div untuk timeline-panel terakhir -->
                    </div>
                </div>
            <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</div>
