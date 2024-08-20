<!-- Start::app-content -->
<div class="main-content app-content">
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div class="my-auto">
                <h5 class="page-title fs-21 mb-1">Jadwal Mengajar Dosen</h5>
            </div>
        </div>
        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable-basic" class="table table-bordered text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Dosen</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $current_dosen = '';
                                    $n = 0;

                                    foreach ($pertemuan as $p):
                                        if ($p->kd_dosen !== $current_dosen):
                                            $current_dosen = $p->kd_dosen;
                                            $n++;
                                    ?>
                                    <tr>
                                        <td><?= $n; ?></td>
                                        <td><?= $p->kd_dosen ?></td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#jadwalModal-<?php echo $p->kd_dosen; ?>">
                                                Lihat Jadwal
                                            </button>
                                        </td>
                                    </tr>
                                    <?php endif; endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End::row-1 -->

        <!-- Modal untuk setiap dosen -->
        <?php foreach ($pertemuan as $p): ?>
            <div class="modal fade" id="jadwalModal-<?php echo $p->kd_dosen; ?>" tabindex="-1"
                aria-labelledby="jadwalModalLabel-<?php echo $p->kd_dosen; ?>" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="jadwalModalLabel-<?php echo $p->kd_dosen; ?>">
                                Jadwal Dosen: <?php echo $p->kd_dosen; ?>
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Kelas</th>
                                            <th>Mata Kuliah</th>
                                            <th>SKS</th>
                                            <th>Hari</th>
                                            <th>Jam</th>
                                            <th>Ruangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($pertemuan as $j):
                                            if ($j->kd_dosen === $p->kd_dosen):
                                        ?>
                                        <tr>
                                            <td><?= $j->kd_lokal ?></td>
                                            <td><?= $j->nm_mtk ?></td>
                                            <td><?= $j->sksajar ?></td>
                                            <td><?= $j->hari_t ?></td>
                                            <td><?= $j->jam_t ?></td>
                                            <td><?= $j->no_ruang ?></td>
                                        </tr>
                                        <?php
                                            endif;
                                        endforeach;
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                           
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <!-- End Modal -->

    </div>
</div>
<!-- End::app-content -->
