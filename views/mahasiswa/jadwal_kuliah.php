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
                        <div class="vtimeline">
                        <?php
$current_day = '';
$day_count = 0; // Variabel untuk menghitung jumlah hari
?>

<?php foreach ($jadwal as $i): ?>
    <?php 
    // Cek jika hari saat ini berbeda dengan yang sebelumnya, cetak heading hari baru
    if ($i->hari_t !== $current_day): 
        if ($current_day !== ''): ?>
            <!-- Tutup div untuk timeline-panel sebelumnya -->
            </div>
            </div>
        <?php endif; 
        $current_day = $i->hari_t; 
        $day_count++; // Tingkatkan jumlah hari
    ?>

    <!-- Pilih kelas wrapper berdasarkan posisi (selang-seling berdasarkan hari) -->
    <div class="timeline-wrapper <?php echo $day_count % 2 == 1 ? '' : 'timeline-inverted'; ?>">
        <div class="timeline-badge bg-warning-gradient"><i class="las la-business-time"></i></div>
        <div class="timeline-panel bg-warning-transparent 1 pt-0 px-0">
            <div class="card bg-warning-gradient shadow-none border-0">
                <h6 class="mt-2 px-3 fs-20 text-fixed-white text-center"><?php echo $i->hari_t; ?></h6>
            </div>
    <?php endif; ?>

    <div class="timeline-body px-3 mt-3">
        <div class="d-flex justify-content-between align-items-center bd-gray-800 p-2 rounded">
            <p class="mb-0"><?php echo $i->nm_mtk; ?></p>
            <span class="text"><?php echo $i->jam_t; ?></span>
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
        <!-- End:: row-1 -->
    </div>
</div>