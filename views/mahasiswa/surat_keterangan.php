<div class="main-content app-content">
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div class="my-auto">
                <h5 class="page-title fs-21 mb-1"> Pembuatan Surat Keterangan Online <code><?php echo $name; ?></code></h5>
            </div>
        </div>
        <!-- row1 -->
        <div class="row">
            <div class="col-xxl-10 col-xl-10 col-lg-12 mx-auto">
                <div class="card border-0 mb-4 bg-success-transparent alert p-0 alert-success">
                    <div class="card-header d-flex align-items-center text-success fw-bold">
                        <i class="me-2 far fa-check-circle"></i> Pemberitahuan
                        <button type="button" class="btn-close ms-auto p-0" data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-x"></i></button>
                    </div>
                    <div class="card-body text-success">
                        Segala aktifitas yang anda lakukan di Ruang Mahasiswa ini dicatat secara otomatis oleh Program, gunakan fasilitas ini dengan bijaksana.
                    </div>
                </div>

            </div>
            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <div class="card overflow-hidden latest-tasks">
                    <div>
                        <div class="card-header p-0  justify-content-between px-4 pt-4 text-center ">
                            <h4 class="card-title mg-b-10 text-center">Surat Keterangan</h4>
                        </div>
                        <ul class="nav nav-tabs nav-tabs-header mb-0" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page" href="#tasktab-1" aria-selected="true"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body pt-3 mt-2">
                        <div class="tab-content">
                            <div class="tab-pane border-0 p-0 show active text-muted" id="tasktab-1" role="tabpanel">
                                <div class="row">

                                    <div class="tasks col-xl-12 col-md-12 col-sm-12 ">
                                        <div class="card-header">
                                            <div class="card-title text-center">
                                                <i class="bi bi-wifi display-1"></i>
                                            </div>
                                        </div>
                                        <div class=" flex-grow-1 " style="border-left: 5px solid green; height:auto;">
                                            <a href="javascript:void(0);" class="span">
                                                Versi online
                                            </a>
                                            <div class="time">
                                                adalah Surat yang dapat di cetak saat ini juga setelah anda menekan tombol proses dan sudah dianggap sah oleh BAAK BSI (karena menyertakan security print).

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

        <!-- row2 -->
        <div class="row">
            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">Ketik Surat Keterangan di bawah ini</div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?= base_url('Mahasiswa/surat_keterangan_store'); ?>">
                            <input type="hidden" class="form-control " id="nim" name="nim" value="<?php echo $mhs->nim; ?>" readonly>
                            <input type="hidden" class="form-control " id="nama" name="nama" value="<?php echo $mhs->nm_mhs; ?>" readonly>
                            <label for="text-area" class="form-label"></label>
                            <textarea class="form-control" id="text-area" name="ket" rows="5"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <!-- row3 -->
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 mx-auto">
                <div class="card border border-success mb-4">
                    <div class="card-body text-success text-center">
                        <div class="success-widget">
                            <h4 class="text-success">Konfirmasi</h4>
                            <p class="mt-3 mb-0"> <strong>Ketik pada form kosong diatas maksud pembuatan surat keterangan serta harus diisi dengan data yang sebenarnya,</strong> dan periksa sekali lagi apa yang anda telah ketikkan, setelah anda menekan tombol proses akan dibuatkan surat Keterangan dan data yang anda masukkan menjadi bukti bahwa anda pernah membuat surat Keterangan. Gunakan fasilitas ini dengan sebaik-baiknya dan bijaksana.</p>
                        </div>
                    </div>
                    <div class="row mb-3" style="display: flex; justify-content: center;">
                        <button type="submit" class="btn btn-primary label-btn" style="width: auto;">
                            <i class="ri-chat-smile-line label-btn-icon me-2"></i>
                            Kirim
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 mx-auto">
                <div class="card custom-card ">
                    <div class="card-header text-center d-block   ">
                        <div class="card-title">Surat Pengantar Yang Telah Di Ajukan</div>
                    </div>
                    <div class="card-body">
                        <div class="card-text">
                            <div class="row mb-3">
                                <label for="nim_lama" class="col-sm-2 col-form-label">NIM</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control " id="nim_lama" value="<?php echo $mhs->nim; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="nim_lama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control " id="nim_lama" value="<?php echo $mhs->nm_mhs; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="nim_lama" class="col-sm-2 col-form-label">Program Studi</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nim_lama" value="<?php echo $studi->nm_jrs; ?>" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="nim_lama" class="col-sm-2 col-form-label">Kelas</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control " id="nim_lama" value="<?php echo $mhs->kd_lokal; ?>" readonly>
                                </div>
                            </div>
                            <a href="<?php echo base_url('Pdf/generate_pdfsuketmhs');?>" class="btn btn-outline-success rounded-pill btn-wave">lihat pdf</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table text-nowrap table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">NO</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Jam</th>
                                        <th scope="col">Lokasi Ambil</th>
                                        <th scope="col">Proses</th>
                                        <th scope="col">Respon BAAK</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($suket_mhs as $s) : ?>
                                        <tr>
                                            <th><?php echo $no++; ?></th>
                                            <td><?php echo $s->log_date; ?></td>
                                            <td><?php echo $s->log_time; ?></td>
                                            <td><?php echo $s->Lokasi; ?></td>
                                            <td>Cetak Langsung</td>
                                            <td><?php echo $s->Ket_baak; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer  text-center d-block">
                        <a href="javascript:void(0);" class="">Klik disini untuk : Pengajuan Surat Keterangan</a>
                        <br>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>