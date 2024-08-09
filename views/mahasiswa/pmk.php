<!-- APP-CONTENT START -->
<div class="main-content app-content">
    <div class="container-fluid">
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
        </div>
        <div>
            <div class="card custom-card">
                <div class="card-header">
                    <div class="card-title">
                        <h3>Pengajuan Mutasi Kuliah <code><?php echo $name; ?></code></h3>

                    </div>
                </div>

                <div class="card-body">
                    <?= $this->session->flashdata('message'); ?>

                    <div class="fs-14 d-block p-2 bg-danger-transparent mb-1 rounded "><span style="margin-right: 10px;">Catatan: </span><br>
                        <ul>
                            <li>Pengajuan Hanya Dapat Dilakukan SATU KALI.</li>
                            <li>Pemilihan Kampus Berdasarkan Kapasitas Dan Jurusan Yang Tersedia Di Masing-Masing Kampus, Jika Pilihan Kampus Yang Dipilih Tidak Tersedia Maka Kami Akan Mengkonfirmasi.</li>
                            <li>Untuk Mahasiswa Dual Kampus Jika Melakukan Mutasi Untuk BSI Juga Harus Melakukan Mutasi Untuk Nusa Mandiri Sesuai Dengan Ketentuan Yang Berlaku.</li>
                        </ul>
                    </div>

                    <div class="tab-pane active text-muted" id="home1-justified" role="tabpanel">
<code>NOTE DEV: FORM KE pendaftaran_mutasi OK, TAPI UNTUK KAMPUS, PIL_WAKTU,KONDISI,DUAL_D BELUM DI KETAHUI.BUTTON DELETE HANYA SEMENTARA UNTUK PROSES DEVELOPMET</code>

                        <br>
                        <!-- Start:: row-8 -->
                        <?php if (!empty($mutasi)) : ?>
                            <div class="row">
                                <div class="col-xxl-12 col-xl-12 col-lg-12 mx-auto">
                                    <div class="card custom-card ">
                                        <div class="card-header text-center d-block   ">
                                            <div class="card-title">Pengajuan Mutasi Kuliah Telah Di Ajukan</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table text-nowrap table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Tanggal</th>
                                                            <th scope="col">Jam</th>
                                                            <th scope="col">File</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <?php foreach ($mutasi as $s) : ?>
                                                            <tr>
                                                                <td><?php echo $s->tanggal; ?></td>
                                                                <td><?php echo $s->jam; ?></td>
                                                                <td> <a href="<?php echo base_url('assets/uploads/' . $s->nama_file); ?>" target="_blank"><?php echo $s->nama_file; ?></a></td>
                                                                <td><a href="<?php echo site_url('Mahasiswa/delete_mutasi/' . $s->nim); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');" class="btn btn-danger">Hapus</a> </td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php else : ?>
                            <form class="form-material m-t-40" method="post" action="<?= base_url('Mahasiswa/pengajuan_mutasi_kampus_store'); ?>" enctype="multipart/form-data">
                                <br>
                                <div class="form-group">
                                    <label for="form-text" class="form-label fs-14 ">No Telp (Harus Diisi)</label>
                                    <input type="integer" class="form-control form-control-line" name="telp" placeholder="Masukan no telepon..." required>
                                    <input type="hidden" class="form-control form-control-line" name="nim" value="<?php echo $mhs->nim; ?>">
                                    <input type="hidden" class="form-control form-control-line" name="nm_mhs" value="<?php echo $mhs->nm_mhs; ?>">
                                    <input type="hidden" class="form-control form-control-line" name="kd_lokal" value="<?php echo $mhs->kd_lokal; ?>">
                                    <input type="hidden" class="form-control form-control-line" name="kd_paket" value="<?php echo $mhs->kd_paket; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="form-text" class="form-label fs-14 ">Email (Harus Diisi)</label>
                                    <input type="email" class="form-control form-control-line" name="email" placeholder="Masukan email..." required>
                                </div>
                                <div class="form-group">
                                    <label for="form-text" class="form-label fs-14 ">Pilihan Kampus</label>
                                    <select class="form-select" aria-label="Default select example" name="kampus">
                                        <option selected>Silahkan pilih kampus
                                        </option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="form-text" class="form-label fs-14">Pilihan Waktu</label>
                                    <select class="form-select" aria-label="Default select example" name="pil_waktu"  required>
                                        <option selected>Silahkan pilih Waktu</option>
                                        <option value='{"waktu": "1", "pil_waktu": "1", "kondisi": "1"}'>One</option>
                                        <option value='{"waktu": "2", "pil_waktu": "2", "kondisi": "2"}'>Two</option>
                                        <option value='{"waktu": "3", "pil_waktu": "3", "kondisi": "3"}'>Three</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="form-text" class="form-label fs-14 ">Berkas/File Pendukung <code>File Harus Diisi! (.doc, .docx, .zip, .rar, .pdf)</code></label>
                                    <div class="input-group">
                                        <input class="form-control" type="file" id="formFile" name="nama_file" accept=".doc,.docx,.zip,.rar,.pdf"  required>
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-primary btn-user" value="Simpan">
                            </form>
                        <?php endif; ?>
                        <!-- End:: row-8 -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End:: row-2 -->
</div>