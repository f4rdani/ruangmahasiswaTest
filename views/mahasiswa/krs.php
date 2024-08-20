<!-- Start::app-content -->
<div class="main-content app-content">
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div class="my-auto">
                <h5 class="page-title fs-21 mb-1">Kartu Rencana Studi <code><?= $this->session->name ?></code></h5>
            </div>
        </div>
        <style>
           .table-bordered th, .table-bordered td {
            border: 1px solid #000 !important;
        }

            .text-right {
                text-align: right;
            }

            .table th,
            .table td {
                vertical-align: middle;
            }
        </style>
        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-body">
                        <div class="col-12">
                            <code> NOTE DEV: UNTUK KETERANGAN, PROGRAM , KEL UJIAN. STATIS</code>
                            <table class="table">
                                <tr>
                                    <td>NIM</td>
                                    <td  style="width: 5px;">:</td>
                                    <td><?php echo $mhs->nim; ?></td>
                                    <td>Kelas</td>
                                    <td  style="width: 5px;">:</td>
                                    <td><?php echo $mhs->kd_lokal; ?></td>
                                </tr>
                                <tr>
                                    <td>Nama</td>  <td  style="width: 5px;">:</td>
                                    <td><?php echo $mhs->nm_mhs; ?></td>
                                    <td>Keterangan</td>  <td  style="width: 5px;">:</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Program</td>  <td  style="width: 5px;">:</td>
                                    <td>Sarjana (S1)</td>
                                    <td>Kel Ujian</td>  <td  style="width: 5px;">:</td>
                                    <td> <?php echo $mhs->kd_lokal; ?>.A</td>
                                </tr>
                                <tr>
                                    <td>Semester</td>  <td  style="width: 5px;">:</td>
                                    <td><?php $semester = preg_replace('/[^0-9]/', '', explode('.', $mhs->kd_lokal)[1]);
                                                                    echo $semester; ?></td>
                                    <td></td>
                                    <td>  <a href="<?= base_url('Pdf/test_pdfkrs') ?>" class="btn btn-outline-primary btn-wave">Cetak</a></td>
                                </tr>
                            </table>

                            <table class="table table-bordered ">
                                <thead class="bd-cyan-400" >
                                    <tr>
                                        <th  rowspan="3">No</th>
                                        <th  rowspan="3">Kode</th>
                                        <th  rowspan="3">Mata Kuliah</th>
                                        <th  rowspan="3">sks</th>
                                        <th colspan="4" class="text-center">Paraf</th>
                                    </tr>
                                    <tr>
                                        
                                        <th class="text-center" colspan="2">UTS</th>
                                        <th class="text-center" colspan="2">UAS</th>
                                    </tr>
                                    <tr>
                                       
                                        <th class="text-center">Tgl/Prf</th>
                                        <th> Kd</th>
                                        <th class="text-center">Tgl/Prf/Kd</th>
                                        <th> Kd</th>
                                    </tr>
                                </thead>
                                <tbody >
                                <?php $n = 0; $total_sks = 0;foreach($jadwal as $i):$n ++;  $total_sks += $i->sksajar;?>
                                    <tr>
                                        <td><?= $n; ?></td>
                                        <td><?php echo $i->kd_mtk; ?></td>
                                        <td><?php echo $i->nm_mtk; ?></td>
                                        <td><?php echo $i->sksajar; ?></td>
                                        <td>......</td>
                                        <td>......</td>
                                        <td>......</td>
                                        <td>......</td>
                                    </tr>
                                    <?php endforeach ?>
                                    <tr>
                                        <td colspan="3" class="text-right"><strong>Jumlah SKS yang diambil</strong></td>
                                        <td><strong><?php echo $total_sks; ?></strong></td>
                                        <td colspan="4"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--End::row-1 -->



        </div>
    </div>