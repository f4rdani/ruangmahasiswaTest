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
                                                <th>Kelas</th>
                                                <th>Mata Kuliah</th>
                                                <th>Hari</th>
                                                <th>Jam</th>
                                                <th>Ruangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                             $n = 0;
                                             
                                             foreach($pertemuan as $p):
                                                $n ++;
                                             ?>
                                            <tr>
                                                <td><?= $n; ?></td>
                                                <td><?= $p->kd_dosen ?></td>
                                                <td><?= $p->kd_lokal ?></td>
                                                <td><?= $p->nm_mtk ?></td>
                                                <td><?= $p->hari_t ?></td>
                                                <td><?= $p->jam_t ?></td>
                                                <td><?= $p->no_ruang ?></td>
                                            </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->
                
                
                
    </div>
</div>