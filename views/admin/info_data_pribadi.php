<!-- Start::app-content -->
<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div class="my-auto">
                <h5 class="page-title fs-21 mb-1">Data Pribadi <code><?php echo $name; ?></code></h5>
            </div>

        </div>
        <div class="row">

            <div class="col-xl-12">
                <form action="">
                    <div class="fs-12 d-block p-2 bg-danger-transparent mb-1 rounded " ><span style="margin-right: 10px;"> * WAJIB DI ISI </span>
                    *KPS (Kartu Perlindungan Sosial) </div>
                   
                    <div class="card custom-card bg-info-transparent">
                        <div class="card-header justify-content-between">
                            <div class="card-title">
                                Data Akademik
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Nim</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" value="<?php echo $data_mhs->nim; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">NIK(Nomor Induk Kependudukan)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" value="<?php echo $data_mhs->nik; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="formFile" class="form-label">File Scan KTP * <code>File maksimal 2 MB & harus bertipe .jpg</code> </label>
                                <div class="">
                                    <?php if ($data_mhs->file_ktp) : ?>
                                        <p>File saat ini: <a href="<?php echo base_url('path/to/your/files/' . $data_mhs->file_ktp); ?>" target="_blank"><?php echo $data_mhs->file_ktp; ?></a></p>
                                        
                                    <?php endif; ?>
								</div>
								<div class="col-sm-2 col-form-label">
										<p>Upload file baru jika perlu:</p>
								</div>
								<div class="col-sm-10">
                                    <input class="form-control" type="file" id="formFile" name="file_ktp">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Nama Lengkap *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" value="<?php echo $data_mhs->nm_mhs; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Kewarganegaraan *</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="" name="kewarganegaraan">
                                        <option value="ID" <?php if ($data_mhs->kewarganegaraan == 'ID') echo 'selected'; ?>>Indonesia</option>
                                        <option value="WNA" <?php if ($data_mhs->kewarganegaraan == 'WNA') echo 'selected'; ?>>WNA</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Penerima KPS ** <code>gunakan tanda (-) jika tidak ada.</code> </label>
                                <div class="col-sm-2">
                                    <select class="form-select" id="">
                                        <option value="0" <?php if ($data_mhs->penerima_kps == '0') echo 'selected'; ?>>Tidak</option>
                                        <option value="1" <?php if ($data_mhs->penerima_kps == '1') echo 'selected'; ?>>Ya</option>
                                    </select>
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="" value="<?php echo $data_mhs->no_kps; ?>">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card custom-card bg-warning-transparent">
                        <div class="card-header justify-content-between">
                            <div class="card-title">
                                pribadi
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Nama Jalan</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="text-area" rows="2"><?php echo $data_mhs->alm; ?></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Desa / Kelurahan *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" value="<?php echo $data_mhs->kelurahan; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Kecamatan *</label>
                                <div class="col-sm-10">
                                    <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default" value="<?php echo $data_mhs->kecamatan; ?>">

                                        <?php foreach ($m_wilayah as $w) : ?>

                                            <option value="<?= $w->id_wil ?>" <?php if ($w->id_wil == $data_mhs->kecamatan) echo 'selected'; ?>>
                                                <?= $w->nm_wil ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3" style="display: flex; align-items: center;">
                                <label for="" class="col-sm-2 col-form-label" style="margin-right: 10px;">Nomor Rumah, RT/RW & Kode Pos</label>
                                <div class="col-sm-1" style="margin-right: 10px;">
                                    <label class="form-label">No.Rumah</label>
                                </div>
                                <div class="col-sm-1" style="margin-right: 10px;">
                                    <input type="text" class="form-control" id="" value="<?php echo $data_mhs->no_rmh; ?>">
                                </div>
                                <div class="col-sm-1" style="margin-right: 10px;">
                                    <label class="form-label">RT/RW</label>
                                </div>
                                <div class="col-sm-1" style="display: flex; align-items: center; margin-right: 10px;">
                                    <input type="text" class="form-control" id="" style="width: 45px; margin-right: 5px;" value="<?php echo $data_mhs->rt; ?>">
                                    /
                                    <input type="text" class="form-control" id="" style="width: 45px; margin-left: 5px;" value="<?php echo $data_mhs->rw; ?>">
                                </div>
                                <div class="col-sm-1" style="margin-left: 50px;">
                                    <label class="form-label" >Kode Pos </label>
                                </div>
                                <div class="col-sm-1">
                                    <input type="text" class="form-control" id="" value="<?php echo $data_mhs->kd_pos; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">No. Telp Rumah</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" value="<?php echo $data_mhs->telp; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">No. Telp HP * </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" value="<?php echo $data_mhs->no_telp_hp; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Primary Email *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" value="<?php echo $data_mhs->emailaddress; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Official Email </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="">
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="card custom-card bg-success-transparent">
                        <div class="card-header justify-content-between">
                            <div class="card-title">
                                Data Ayah
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Nama Ayah *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" value="<?php echo $data_ortu->nm_ayah; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">NIK Ayah * <code>(isi Dengan - Jika Sudah Meninggal)</code> </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" value="<?php echo $data_ortu->nikayah; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="date" value="<?php echo $data_ortu->tgl_lhr_ayah; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Pendidikan</label>
                                <div class="col-sm-10">
                                    <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default" value="<?php echo $data_ortu->pddk_ayah; ?>">
                                        <?php foreach ($m_pddk as $w) : ?>

                                            <option value="<?= $w->id_pendidikan ?>" <?php if ($w->id_pendidikan ==  $data_ortu->pddk_ayah) echo 'selected'; ?>>
                                                <?= $w->nama_pendidikan ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>

                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-10">
                                    <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default" value="<?php echo $data_ortu->pkj_ayh; ?>">
                                        <?php foreach ($m_pkj as $w) : ?>

                                            <option value="<?= $w->id_pekerjaan ?>" <?php if ($w->id_pekerjaan ==  $data_ortu->pddk_ayah) echo 'selected'; ?>>
                                                <?= $w->nama_pekerjaan ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Penghasilan</label>
                                <div class="col-sm-10">
                                    <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default" value="<?php echo $data_ortu->pghsln_ayah; ?>">
                                        <?php foreach ($m_pnghsl as $w) : ?>

                                            <option value="<?= $w->id_penghasilan ?>" <?php if ($w->id_penghasilan ==  $data_ortu->pghsln_ayah) echo 'selected'; ?>>
                                                <?= $w->nama_penghasilan ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card custom-card bg-success-transparent">
                        <div class="card-header justify-content-between">
                            <div class="card-title">
                                Data Ibu
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Nama Ibu *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" value="<?php echo $data_ortu->nm_ibu; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">NIK Ibu * <code>(isi Dengan - Jika Sudah Meninggal)</code></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" value="<?php echo $data_ortu->nikibu; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="date" value="<?php echo $data_ortu->tgl_lhr_ibu; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Pendidikan</label>
                                <div class="col-sm-10">
                                    <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default" value="<?php echo $data_ortu->pddk_ibu; ?>">
                                        <?php foreach ($m_pddk as $w) : ?>

                                            <option value="<?= $w->id_pendidikan ?>" <?php if ($w->id_pendidikan ==  $data_ortu->pddk_ibu) echo 'selected'; ?>>
                                                <?= $w->nama_pendidikan ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>

                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-10">
                                    <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default" value="<?php echo $data_ortu->pkj_ibu; ?>">
                                        <?php foreach ($m_pkj as $w) : ?>

                                            <option value="<?= $w->id_pekerjaan ?>" <?php if ($w->id_pekerjaan ==  $data_ortu->pddk_ibu) echo 'selected'; ?>>
                                                <?= $w->nama_pekerjaan ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Penghasilan</label>
                                <div class="col-sm-10">
                                    <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default" value="<?php echo $data_ortu->pghsln_ibu; ?>">
                                        <?php foreach ($m_pnghsl as $w) : ?>

                                            <option value="<?= $w->id_penghasilan ?>" <?php if ($w->id_penghasilan ==  $data_ortu->pghsln_ibu) echo 'selected'; ?>>
                                                <?= $w->nama_penghasilan ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card custom-card bg-danger-transparent">
                        <div class="card-header justify-content-between">
                            <div class="card-title">
                                Data Wali
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Nama Wali</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" value="<?php echo $data_wali->nm_wali; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">NIK Wali <code>(isi Dengan - Jika Sudah Meninggal)</code></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="" value="<?php echo $data_wali->nikwali; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="date" value="<?php echo $data_wali->tgl_lhr_wali; ?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Pendidikan</label>
                                <div class="col-sm-10">
                                    <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default" value="<?php echo $data_wali->pendidikan_wali; ?>">
                                        <?php foreach ($m_pddk as $w) : ?>

                                            <option value="<?= $w->id_pendidikan ?>" <?php if ($w->id_pendidikan ==  $data_wali->pendidikan_wali) echo 'selected'; ?>>
                                                <?= $w->nama_pendidikan ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>

                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Pekerjaan</label>
                                <div class="col-sm-10">
                                    <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default" value="<?php echo $data_wali->pekerjaan; ?>">
                                        <?php foreach ($m_pkj as $w) : ?>

                                            <option value="<?= $w->id_pekerjaan ?>" <?php if ($w->id_pekerjaan ==  $data_wali->pekerjaan) echo 'selected'; ?>>
                                                <?= $w->nama_pekerjaan ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-2 col-form-label">Penghasilan</label>
                                <div class="col-sm-10">
                                    <select class="form-control" data-trigger name="choices-single-default" id="choices-single-default" value="<?php echo $data_wali->penghasilan; ?>">
                                        <?php foreach ($m_pnghsl as $w) : ?>

                                            <option value="<?= $w->id_penghasilan ?>" <?php if ($w->id_penghasilan ==  $data_wali->penghasilan) echo 'selected'; ?>>
                                                <?= $w->nama_penghasilan ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- <div class="card custom-card bg-dark-transparent">
                        <div class="card-body"> <code>Ceklis ini dulu agar muncul button untuk lanjut</code> <br>
                            <div class="form-check form-check-md d-flex align-items-center">

                                <input class="form-check-input" type="checkbox" value="" id="checkbox-md-1" onchange="toggleButton()">
                                <label class="form-check-label" for="checkbox-md-1">
                                    Pastikan Semua Data Sudah Benar, Kesalahan Data Berakibat Pada Kesalahan Pelaporan Direktorat Jenderal Pendidikan Tinggi
                                </label>
                            </div>
                            <div class="row mb-3" style="display: flex; justify-content: center;">
                                <button type="button" class="btn btn-outline-success rounded-pill btn-wave" id="success-button-1" style="width: auto; display: none;">Simpan Data Pribadi</button>
                            </div>
                        </div>
                    </div> -->

                    <!-- <script>
                        function toggleButton() {
                            const checkbox = document.getElementById('checkbox-md-1');
                            const button = document.getElementById('success-button-1');
                            if (checkbox.checked) {
                                button.style.display = 'block';
                            } else {
                                button.style.display = 'none';
                            }
                        }
                    </script> -->
                </form>
            </div>
        </div>
    </div>
</div>
</div>
