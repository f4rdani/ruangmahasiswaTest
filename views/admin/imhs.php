<div class="main-content app-content">
    <div class="container-fluid">
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb"></div>
        <div>
            <div class="card custom-card">
                <div class="card-header">
                    <div class="card-title">INFORMASI MAHASISWA</div>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs mb-3 nav-justified nav-style-1 d-sm-flex d-block" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" role="tab" href="#home1-justified" aria-selected="true">Mahasiswa Aktif</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" role="tab" href="#about1-justified" aria-selected="false">Mahasiswa Non Aktif</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" role="tab" href="#active-again-justified" aria-selected="false">Mahasiswa Aktif Kembali</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="home1-justified" role="tabpanel">
                            <!-- Konten Mahasiswa Aktif -->
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Data Mahasiswa Aktif
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="responsiveDataTable" class="table table-bordered text-nowrap w-100">
                                                    <thead>
                                                        <tr>
                                                            <th>NIM</th>
                                                            <th>Nama</th>
                                                            <th>Option</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
                                                            foreach($data as $date): 
                                                        ?>
                                                        <tr>
                                                            <td><?= $date->nim ?></td>
                                                            <td><?= $date->nm_mhs ?></td>
                                                            <td class="text-center">
                                                                <a href="<?= base_url("admin/datapribadi/" . $date->nim) ?>" class="btn btn-sm btn-primary">View</a>
                                                                <a href="<?= base_url("admin/info_data_pribadi/" . $date->nim) ?>" class="btn btn-sm btn-primary">View</a>
                                                            </td>
                                                        </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="about1-justified" role="tabpanel">
                            <!-- Konten Mahasiswa Non Aktif -->
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Data Mahasiswa Non Aktif
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="datatable-basic" class="table table-bordered text-nowrap w-100">
                                                    <thead>
                                                        <tr>
                                                            <th>NIM</th>
                                                            <th>Nama</th>
                                                            <th>Option</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
                                                            foreach($da as $date): 
                                                        ?>
                                                        <tr>
                                                            <td><?= $date->nim ?></td>
                                                            <td><?= $date->nm_mhs ?></td>
                                                            <td class="text-center">
                                                                <a href="<?= base_url("admin/datapribadi/" . $date->nim) ?>" class="btn btn-sm btn-primary">View</a>
                                                                <a href="<?= base_url("admin/info_data_pribadi/" . $date->nim) ?>" class="btn btn-sm btn-primary">View</a>
                                                            </td>
                                                        </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="active-again-justified" role="tabpanel">
                            <!-- Konten Mahasiswa Aktif Kembali -->
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header">
                                            <div class="card-title">
                                                Data Mahasiswa Aktif Kembali
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="hidden-columns" class="table table-bordered text-nowrap w-100">
                                                    <thead>
                                                        <tr>
                                                            <th>NIM Lama</th>
                                                            <th>NIM Baru</th>
                                                            <th>Nama</th>
                                                            <th>kd_lokal</th>
                                                            <th>kd_lokal_baru</th>
                                                            <th>Option</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
                                                            foreach($d as $date): 
                                                        ?>
                                                        <tr>
                                                            <td><?= $date->nim_lama ?></td>
                                                            <td><?= $date->nim_baru ?></td>
                                                            <td><?= $date->nm_mhs ?></td>
                                                            <td><?= $date->kd_lokal ?></td>
                                                            <td><?= $date->kd_lokal_baru ?></td>
                                                            <td class="text-center">
                                                                <a href="" class="btn btn-sm btn-primary">View</a>
                                                            </td>
                                                        </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
