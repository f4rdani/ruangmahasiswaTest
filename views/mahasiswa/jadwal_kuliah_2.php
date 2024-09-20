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
                        <a style="margin-bottom: 20px;" href="<?= base_url('Pdf/cetak_jadwal_kuliah'); ?>" class="btn btn-primary">Cetak Jadwal</a>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Hari</th>
                                        <th>Mata Kuliah</th>
                                        <th>Silabus</th>
                                        <th>Rpl</th>
                                        <th>Slide</th>
                                        <th>Zip</th>
                                        <th>Modul</th>
                                        <th>Jam</th>
                                        <th>Kode Dosen</th>
                                        <th>Ruangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
$current_day = '';
$day_count = 0;
?>

<?php foreach ($jadwal as $i): ?>
    <?php 
    // Cek jika hari saat ini berbeda dengan yang sebelumnya
    if ($i->hari_t !== $current_day): 
        $current_day = $i->hari_t; 
        $day_count++;
    ?>
    <?php endif; ?>

    <!-- Table row for each schedule item -->
    <tr>
        <td><?php echo $i->hari_t; ?></td>
        <td><?php echo $i->nm_mtk; ?></td>
        <td><a href="#" ><i class="fa fa-folder"></i></a></td>
        <td><a href="#" ><i class="fa fa-folder"></i></a></td>
        <td><a href="#" ><i class="fa fa-folder"></i></a></td>
        <td><a href="#" ><i class="fa fa-folder"></i></a></td>
        <td><a href="#" ><i class="fa fa-folder"></i></a></td>
        <td><?php echo $i->jam_t; ?></td>
        <td><?php echo $i->kd_dosen; ?></td>
        <td><?php echo $i->no_ruang; ?></td>
    </tr>
<?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End:: row-1 -->
    </div>
</div>
