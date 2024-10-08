<style>
    .hidden {
        display: none;
    }
	.fade-in {
        animation: fadeIn 1s forwards;
    }
    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
	}
    table {
        width: 50%;
        border-collapse: collapse;
        margin: 20px auto;
    }
    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }
    
    tfoot td {
        text-align: center;
    }
</style>

<!-- Start::app-content -->
<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Page Header -->
        <!-- <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div class="my-auto">
                <h5 class="page-title fs-21 mb-1">Nilai Murni UTS <code><?php echo $name; ?></code></h5>
                <a href="javascript:void(0);" class="">Tanggal Buka : <code><?php echo $tgl->tgl_buka; ?> <?php echo $tgl->bln_buka; ?> <?php echo $tgl->thn_buka; ?></code> Jam buka:<code><?php echo $tgl->jam_buka; ?>:<?php echo $tgl->menit_buka; ?></code></a>
                    <p>Jam Buka <code><?php echo $tgl->jam_buka; ?>:<?php echo $tgl->menit_buka; ?></code></p>
                    <a href="javascript:void(0);" class="">Tanggal Tutup : <code><?php echo $tgl->tgl_tutup; ?> <?php echo $tgl->bln_tutup; ?> <?php echo $tgl->thn_tutup; ?></code> Jam tutup:<code><?php echo $tgl->jam_tutup; ?>:<?php echo $tgl->menit_tutup; ?></code></a>
                    <p>Jam tutup <code><?php echo $tgl->jam_tutup; ?>:<?php echo $tgl->menit_tutup; ?></code></p>

            </div>
        </div> -->
        <?php
date_default_timezone_set('Asia/Jakarta'); // Set timezone ke Jakarta

// Pemetaan nama bulan ke nomor bulan
$months = array(
    "January" => 1,
    "February" => 2,
    "March" => 3,
    "April" => 4,
    "May" => 5,
    "June" => 6,
    "July" => 7,
    "August" => 8,
    "September" => 9,
    "October" => 10,
    "November" => 11,
    "December" => 12
);

// Mendapatkan informasi dari database
$day_buka = $tgl->tgl_buka; // Misalnya "01"
$month_buka = $tgl->bln_buka; // Misalnya "July"
$year_buka = $tgl->thn_buka; // Misalnya "2024"

$day_tutup = $tgl->tgl_tutup; // Misalnya "31"
$month_tutup = $tgl->bln_tutup; // Misalnya "December"
$year_tutup = $tgl->thn_tutup; // Misalnya "2024"

// Mendapatkan jam dan menit buka dan tutup dari database
$hour_buka = $tgl->jam_buka; // Misalnya "09"
$minute_buka = $tgl->menit_buka; // Misalnya "00"
$hour_tutup = $tgl->jam_tutup; // Misalnya "17"
$minute_tutup = $tgl->menit_tutup; // Misalnya "00"

// Mendapatkan bulan dan tanggal saat ini
$today = new DateTime();
$current_day = $today->format('d');
$current_month = $today->format('F');
$current_year = $today->format('Y');
$current_hour = $today->format('H');
$current_minute = $today->format('i');

// Mengonversi bulan dari teks ke nomor bulan
$month_buka_num = $months[$month_buka];
$month_tutup_num = $months[$month_tutup];
$current_month_num = $months[$current_month];

// Mengonversi tanggal buka dan tutup ke objek DateTime
$open_date = new DateTime("$year_buka-$month_buka_num-$day_buka $hour_buka:$minute_buka");
$close_date = new DateTime("$year_tutup-$month_tutup_num-$day_tutup $hour_tutup:$minute_tutup");
$current_date_time = new DateTime("$current_year-$current_month_num-$current_day $current_hour:$current_minute");

// Memeriksa apakah tanggal dan waktu saat ini berada dalam rentang tanggal dan waktu buka dan tutup
if ($current_date_time >= $open_date && $current_date_time <= $close_date): ?>
<div class="card-body">
    <div class="tab-pane active text-muted" id="home1-justified" role="tabpanel">
        <!-- Start:: row-8 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title">
							<h5>KARTU HASIL STUDI (KHS) Persemester</h5>
						</div>
                    </div>
                    <div class="card-body" style="display: flex; flex-direction: column; align-items: center;">
                        <b><label class="form-label">Silakan Pilih Semester </label></b>
                        <select id="semesterSelect" class="form-select rounded-pill mb-3" style="width:150px;" aria-label="Default select example">
                            <option selected>pilih di sini</option>
                            <option value="1">Satu</option>
                            <option value="2">Dua</option>
                            <option value="3">Tiga</option>
                            <option value="4">Empat</option>
                            <option value="5">Lima</option>
                            <option value="6">Enam</option>
                            <option value="7">Tujuh</option>
                            <option value="8">Delapan</option>
                        </select>
                        <button id="submitButton" class="btn btn-primary rounded-pill">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End:: row-8 -->
    </div>
</div>

<div id="khsContent1" class="card-body hidden">
    <div class="tab-pane active text-muted" id="home1-justified" role="tabpanel">
        <!-- Start:: row-8 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <h5 class="page-title fs-21 mb-1">KARTU HASIL STUDI (KHS) - Semester 1</h5>
                    </div>
                    <div class="card-body">
                        <p><strong>NIM:</strong> <?php echo $student['nim']; ?></p>
                        <p><strong>Nama:</strong> <?php echo $student['nm_mhs']; ?></p>
                        <p><strong>Program Studi:</strong> <?php echo $student['nm_jrs']; ?></p>
                        <p><strong>Kelas:</strong> <?php echo $student['kd_lokal']; ?></p>
                        <div class="table-responsive">
                            <table class="text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Mata Kuliah</th>
                                        <th>SKS</th>
                                        <th>Nilai</th>
                                        <th>Mutu</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($penilaian_data_by_semester[1])) :
                                        foreach ($penilaian_data_by_semester[1] as $index => $row) : ?>
                                            <tr>
                                                <td><?php echo $index + 1; ?></td>
                                                <td><?php echo $row['kd_mtk']; ?></td>
                                                <td><?php echo $row['nm_mtk']; ?></td>
                                                <td><?php echo $row['sks']; ?></td>
                                                <td><?php echo $row['grade_akhir']; ?></td>
                                                <td><?php echo $row['nmutu']; ?></td>
                                                <td></td>
                                            </tr>
                                        <?php endforeach;
                                    else : ?>
                                        <tr>
                                            <td colspan="7">No data available</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                            <div>
                                <table>
                                    <thead>
                                        <tr>
                                            <td colspan="5"><center><strong>Bobot Nilai</strong></center></td>
                                        </tr>
                                        <tr>
                                            <th>A = 4</th>
                                            <th>B = 3</th>
                                            <th>C = 2</th>
                                            <th>D = 1</th>
                                            <th>E = 0</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="4">Total Mutu</td>
                                            <td><?php echo $totalMutu1; ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">Total SKS yang telah diambil</td>
                                            <td><?php echo $totalSKS1; ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">Indeks Prestasi Kumulatif (IPK)</td>
                                            <td><?php echo $ipk1; ?></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="5"><small><i>Pengolahan Data KHS Menggunakan Web ini adalah sah</i></small></td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <center><a href="<?= base_url("mahasiswa/khs_semester_print?semester=1")?>" style="color: red;">cetak khs</a></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End:: row-8 -->
    </div>
</div>

<div id="khsContent2" class="card-body hidden">
    <div class="tab-pane active text-muted" id="home1-justified" role="tabpanel">
        <!-- Start:: row-8 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <h5 class="page-title fs-21 mb-1">KARTU HASIL STUDI (KHS) - Semester 2</h5>
                    </div>
                    <div class="card-body">
                        <p><strong>NIM:</strong> <?php echo $student['nim']; ?></p>
                        <p><strong>Nama:</strong> <?php echo $student['nm_mhs']; ?></p>
                        <p><strong>Program Studi:</strong> <?php echo $student['nm_jrs']; ?></p>
                        <p><strong>Kelas:</strong> <?php echo $student['kd_lokal']; ?></p>
                        <div class="table-responsive">
                            <table class="text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Mata Kuliah</th>
                                        <th>SKS</th>
                                        <th>Nilai</th>
                                        <th>Mutu</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($penilaian_data_by_semester[2])) :
                                        foreach ($penilaian_data_by_semester[2] as $index => $row) : ?>
                                            <tr>
                                                <td><?php echo $index + 1; ?></td>
                                                <td><?php echo $row['kd_mtk']; ?></td>
                                                <td><?php echo $row['nm_mtk']; ?></td>
                                                <td><?php echo $row['sks']; ?></td>
                                                <td><?php echo $row['grade_akhir']; ?></td>
                                                <td><?php echo $row['nmutu']; ?></td>
                                                <td></td>
                                            </tr>
                                        <?php endforeach;
                                    else : ?>
                                        <tr>
                                            <td colspan="7">No data available</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                            <div>
                                <table>
                                    <thead>
                                        <tr>
                                            <td colspan="5"><center><strong>Bobot Nilai</strong></center></td>
                                        </tr>
                                        <tr>
                                            <th>A = 4</th>
                                            <th>B = 3</th>
                                            <th>C = 2</th>
                                            <th>D = 1</th>
                                            <th>E = 0</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="4">Total Mutu</td>
                                            <td><?php echo $totalMutu2; ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">Total SKS yang telah diambil</td>
                                            <td><?php echo $totalSKS2; ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">Indeks Prestasi Kumulatif (IPK)</td>
                                            <td><?php echo $ipk2; ?></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="5"><small><i>Pengolahan Data KHS Menggunakan Web ini adalah sah</i></small></td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <center><a href="<?= base_url("mahasiswa/khs_semester_print?semester=2")?>" style="color: red;">cetak khs</a></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End:: row-8 -->
    </div>
</div>

<div id="khsContent3" class="card-body hidden">
    <div class="tab-pane active text-muted" id="home1-justified" role="tabpanel">
        <!-- Start:: row-8 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <h5 class="page-title fs-21 mb-1">KARTU HASIL STUDI (KHS) - Semester 3</h5>
                    </div>
                    <div class="card-body">
                        <p><strong>NIM:</strong> <?php echo $student['nim']; ?></p>
                        <p><strong>Nama:</strong> <?php echo $student['nm_mhs']; ?></p>
                        <p><strong>Program Studi:</strong> <?php echo $student['nm_jrs']; ?></p>
                        <p><strong>Kelas:</strong> <?php echo $student['kd_lokal']; ?></p>
                        <div class="table-responsive">
                            <table class="text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Mata Kuliah</th>
                                        <th>SKS</th>
                                        <th>Nilai</th>
                                        <th>Mutu</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($penilaian_data_by_semester[3])) :
                                        foreach ($penilaian_data_by_semester[3] as $index => $row) : ?>
                                            <tr>
                                                <td><?php echo $index + 1; ?></td>
                                                <td><?php echo $row['kd_mtk']; ?></td>
                                                <td><?php echo $row['nm_mtk']; ?></td>
                                                <td><?php echo $row['sks']; ?></td>
                                                <td><?php echo $row['grade_akhir']; ?></td>
                                                <td><?php echo $row['nmutu']; ?></td>
                                                <td></td>
                                            </tr>
                                        <?php endforeach;
                                    else : ?>
                                        <tr>
                                            <td colspan="7">No data available</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                            <div>
                                <table>
                                    <thead>
                                        <tr>
                                            <td colspan="5"><center><strong>Bobot Nilai</strong></center></td>
                                        </tr>
                                        <tr>
                                            <th>A = 4</th>
                                            <th>B = 3</th>
                                            <th>C = 2</th>
                                            <th>D = 1</th>
                                            <th>E = 0</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="4">Total Mutu</td>
                                            <td><?php echo $totalMutu3; ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">Total SKS yang telah diambil</td>
                                            <td><?php echo $totalSKS3; ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">Indeks Prestasi Kumulatif (IPK)</td>
                                            <td><?php echo $ipk3; ?></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="5"><small><i>Pengolahan Data KHS Menggunakan Web ini adalah sah</i></small></td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <center><a href="<?= base_url("mahasiswa/khs_semester_print?semester=3")?>" style="color: red;">cetak khs</a></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End:: row-8 -->
    </div>
</div>

<div id="khsContent4" class="card-body hidden">
    <div class="tab-pane active text-muted" id="home1-justified" role="tabpanel">
        <!-- Start:: row-8 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <h5 class="page-title fs-21 mb-1">KARTU HASIL STUDI (KHS) - Semester 4</h5>
                    </div>
                    <div class="card-body">
                        <p><strong>NIM:</strong> <?php echo $student['nim']; ?></p>
                        <p><strong>Nama:</strong> <?php echo $student['nm_mhs']; ?></p>
                        <p><strong>Program Studi:</strong> <?php echo $student['nm_jrs']; ?></p>
                        <p><strong>Kelas:</strong> <?php echo $student['kd_lokal']; ?></p>
                        <div class="table-responsive">
                            <table class="text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Mata Kuliah</th>
                                        <th>SKS</th>
                                        <th>Nilai</th>
                                        <th>Mutu</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($penilaian_data_by_semester[4])) :
                                        foreach ($penilaian_data_by_semester[4] as $index => $row) : ?>
                                            <tr>
                                                <td><?php echo $index + 1; ?></td>
                                                <td><?php echo $row['kd_mtk']; ?></td>
                                                <td><?php echo $row['nm_mtk']; ?></td>
                                                <td><?php echo $row['sks']; ?></td>
                                                <td><?php echo $row['grade_akhir']; ?></td>
                                                <td><?php echo $row['nmutu']; ?></td>
                                                <td></td>
                                            </tr>
                                        <?php endforeach;
                                    else : ?>
                                        <tr>
                                            <td colspan="7">No data available</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                            <div>
                                <table>
                                    <thead>
                                        <tr>
                                            <td colspan="5"><center><strong>Bobot Nilai</strong></center></td>
                                        </tr>
                                        <tr>
                                            <th>A = 4</th>
                                            <th>B = 3</th>
                                            <th>C = 2</th>
                                            <th>D = 1</th>
                                            <th>E = 0</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="4">Total Mutu</td>
                                            <td><?php echo $totalMutu4; ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">Total SKS yang telah diambil</td>
                                            <td><?php echo $totalSKS4; ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">Indeks Prestasi Kumulatif (IPK)</td>
                                            <td><?php echo $ipk4; ?></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="5"><small><i>Pengolahan Data KHS Menggunakan Web ini adalah sah</i></small></td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <center><a href="<?= base_url("mahasiswa/khs_semester_print?semester=4")?>" style="color: red;">cetak khs</a></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End:: row-8 -->
    </div>
</div>


<div id="khsContent5" class="card-body hidden">
    <div class="tab-pane active text-muted" id="home1-justified" role="tabpanel">
        <!-- Start:: row-8 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <h5 class="page-title fs-21 mb-1">KARTU HASIL STUDI (KHS) - Semester 5</h5>
                    </div>
                    <div class="card-body">
                        <p><strong>NIM:</strong> <?php echo $student['nim']; ?></p>
                        <p><strong>Nama:</strong> <?php echo $student['nm_mhs']; ?></p>
                        <p><strong>Program Studi:</strong> <?php echo $student['nm_jrs']; ?></p>
                        <p><strong>Kelas:</strong> <?php echo $student['kd_lokal']; ?></p>
                        <div class="table-responsive">
                            <table class="text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Mata Kuliah</th>
                                        <th>SKS</th>
                                        <th>Nilai</th>
                                        <th>Mutu</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($penilaian_data_by_semester[5])) :
                                        foreach ($penilaian_data_by_semester[5] as $index => $row) : ?>
                                            <tr>
                                                <td><?php echo $index + 1; ?></td>
                                                <td><?php echo $row['kd_mtk']; ?></td>
                                                <td><?php echo $row['nm_mtk']; ?></td>
                                                <td><?php echo $row['sks']; ?></td>
                                                <td><?php echo $row['grade_akhir']; ?></td>
                                                <td><?php echo $row['nmutu']; ?></td>
                                                <td></td>
                                            </tr>
                                        <?php endforeach;
                                    else : ?>
                                        <tr>
                                            <td colspan="7">No data available</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                            <div>
                                <table>
                                    <thead>
                                        <tr>
                                            <td colspan="5"><center><strong>Bobot Nilai</strong></center></td>
                                        </tr>
                                        <tr>
                                            <th>A = 4</th>
                                            <th>B = 3</th>
                                            <th>C = 2</th>
                                            <th>D = 1</th>
                                            <th>E = 0</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="4">Total Mutu</td>
                                            <td><?php echo $totalMutu5; ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">Total SKS yang telah diambil</td>
                                            <td><?php echo $totalSKS5; ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">Indeks Prestasi Kumulatif (IPK)</td>
                                            <td><?php echo $ipk5; ?></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="5"><small><i>Pengolahan Data KHS Menggunakan Web ini adalah sah</i></small></td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <center><a href="<?= base_url("mahasiswa/khs_semester_print?semester=5")?>" style="color: red;">cetak khs</a></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End:: row-8 -->
    </div>
</div>


<div id="khsContent6" class="card-body hidden">
    <div class="tab-pane active text-muted" id="home1-justified" role="tabpanel">
        <!-- Start:: row-8 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <h5 class="page-title fs-21 mb-1">KARTU HASIL STUDI (KHS) - Semester 6</h5>
                    </div>
                    <div class="card-body">
                        <p><strong>NIM:</strong> <?php echo $student['nim']; ?></p>
                        <p><strong>Nama:</strong> <?php echo $student['nm_mhs']; ?></p>
                        <p><strong>Program Studi:</strong> <?php echo $student['nm_jrs']; ?></p>
                        <p><strong>Kelas:</strong> <?php echo $student['kd_lokal']; ?></p>
                        <div class="table-responsive">
                            <table class="text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Mata Kuliah</th>
                                        <th>SKS</th>
                                        <th>Nilai</th>
                                        <th>Mutu</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($penilaian_data_by_semester[6])) :
                                        foreach ($penilaian_data_by_semester[6] as $index => $row) : ?>
                                            <tr>
                                                <td><?php echo $index + 1; ?></td>
                                                <td><?php echo $row['kd_mtk']; ?></td>
                                                <td><?php echo $row['nm_mtk']; ?></td>
                                                <td><?php echo $row['sks']; ?></td>
                                                <td><?php echo $row['grade_akhir']; ?></td>
                                                <td><?php echo $row['nmutu']; ?></td>
                                                <td></td>
                                            </tr>
                                        <?php endforeach;
                                    else : ?>
                                        <tr>
                                            <td colspan="7">No data available</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                            <div>
                                <table>
                                    <thead>
                                        <tr>
                                            <td colspan="5"><center><strong>Bobot Nilai</strong></center></td>
                                        </tr>
                                        <tr>
                                            <th>A = 4</th>
                                            <th>B = 3</th>
                                            <th>C = 2</th>
                                            <th>D = 1</th>
                                            <th>E = 0</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="4">Total Mutu</td>
                                            <td><?php echo $totalMutu6; ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">Total SKS yang telah diambil</td>
                                            <td><?php echo $totalSKS6; ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">Indeks Prestasi Kumulatif (IPK)</td>
                                            <td><?php echo $ipk6; ?></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="5"><small><i>Pengolahan Data KHS Menggunakan Web ini adalah sah</i></small></td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <center><a href="<?= base_url("mahasiswa/khs_semester_print?semester=6")?>" style="color: red;">cetak khs</a></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End:: row-8 -->
    </div>
</div>


<div id="khsContent7" class="card-body hidden">
    <div class="tab-pane active text-muted" id="home1-justified" role="tabpanel">
        <!-- Start:: row-8 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <h5 class="page-title fs-21 mb-1">KARTU HASIL STUDI (KHS) - Semester 7</h5>
                    </div>
                    <div class="card-body">
                        <p><strong>NIM:</strong> <?php echo $student['nim']; ?></p>
                        <p><strong>Nama:</strong> <?php echo $student['nm_mhs']; ?></p>
                        <p><strong>Program Studi:</strong> <?php echo $student['nm_jrs']; ?></p>
                        <p><strong>Kelas:</strong> <?php echo $student['kd_lokal']; ?></p>
                        <div class="table-responsive">
                            <table class="text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Mata Kuliah</th>
                                        <th>SKS</th>
                                        <th>Nilai</th>
                                        <th>Mutu</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($penilaian_data_by_semester[7])) :
                                        foreach ($penilaian_data_by_semester[7] as $index => $row) : ?>
                                            <tr>
                                                <td><?php echo $index + 1; ?></td>
                                                <td><?php echo $row['kd_mtk']; ?></td>
                                                <td><?php echo $row['nm_mtk']; ?></td>
                                                <td><?php echo $row['sks']; ?></td>
                                                <td><?php echo $row['grade_akhir']; ?></td>
                                                <td><?php echo $row['nmutu']; ?></td>
                                                <td></td>
                                            </tr>
                                        <?php endforeach;
                                    else : ?>
                                        <tr>
                                            <td colspan="7">No data available</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                            <div>
                                <table>
                                    <thead>
                                        <tr>
                                            <td colspan="5"><center><strong>Bobot Nilai</strong></center></td>
                                        </tr>
                                        <tr>
                                            <th>A = 4</th>
                                            <th>B = 3</th>
                                            <th>C = 2</th>
                                            <th>D = 1</th>
                                            <th>E = 0</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="4">Total Mutu</td>
                                            <td><?php echo $totalMutu7; ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">Total SKS yang telah diambil</td>
                                            <td><?php echo $totalSKS7; ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">Indeks Prestasi Kumulatif (IPK)</td>
                                            <td><?php echo $ipk7; ?></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="5"><small><i>Pengolahan Data KHS Menggunakan Web ini adalah sah</i></small></td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <center><a href="<?= base_url("mahasiswa/khs_semester_print?semester=7")?>" style="color: red;">cetak khs</a></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End:: row-8 -->
    </div>
</div>


<div id="khsContent8" class="card-body hidden">
    <div class="tab-pane active text-muted" id="home1-justified" role="tabpanel">
        <!-- Start:: row-8 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <h5 class="page-title fs-21 mb-1">KARTU HASIL STUDI (KHS) - Semester 8</h5>
                    </div>
                    <div class="card-body">
                        <p><strong>NIM:</strong> <?php echo $student['nim']; ?></p>
                        <p><strong>Nama:</strong> <?php echo $student['nm_mhs']; ?></p>
                        <p><strong>Program Studi:</strong> <?php echo $student['nm_jrs']; ?></p>
                        <p><strong>Kelas:</strong> <?php echo $student['kd_lokal']; ?></p>
                        <div class="table-responsive">
                            <table class="text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Mata Kuliah</th>
                                        <th>SKS</th>
                                        <th>Nilai</th>
                                        <th>Mutu</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($penilaian_data_by_semester[8])) :
                                        foreach ($penilaian_data_by_semester[8] as $index => $row) : ?>
                                            <tr>
                                                <td><?php echo $index + 1; ?></td>
                                                <td><?php echo $row['kd_mtk']; ?></td>
                                                <td><?php echo $row['nm_mtk']; ?></td>
                                                <td><?php echo $row['sks']; ?></td>
                                                <td><?php echo $row['grade_akhir']; ?></td>
                                                <td><?php echo $row['nmutu']; ?></td>
                                                <td></td>
                                            </tr>
                                        <?php endforeach;
                                    else : ?>
                                        <tr>
                                            <td colspan="7">No data available</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                            <div>
                                <table>
                                    <thead>
                                        <tr>
                                            <td colspan="5"><center><strong>Bobot Nilai</strong></center></td>
                                        </tr>
                                        <tr>
                                            <th>A = 4</th>
                                            <th>B = 3</th>
                                            <th>C = 2</th>
                                            <th>D = 1</th>
                                            <th>E = 0</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="4">Total Mutu</td>
                                            <td><?php echo $totalMutu8; ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">Total SKS yang telah diambil</td>
                                            <td><?php echo $totalSKS8; ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">Indeks Prestasi Kumulatif (IPK)</td>
                                            <td><?php echo $ipk8; ?></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="5"><small><i>Pengolahan Data KHS Menggunakan Web ini adalah sah</i></small></td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <center><a href="<?= base_url("mahasiswa/khs_semester_print?semester=8")?>" style="color: red;">cetak khs</a></center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End:: row-8 -->
    </div>
</div>

<script>
    document.getElementById('submitButton').addEventListener('click', function() {
        var semester = document.getElementById('semesterSelect').value;

        // Hide all KHS content
        for (var i = 1; i <= 8; i++) {
            var khsContent = document.getElementById('khsContent' + i);
            khsContent.classList.add('hidden');
            khsContent.classList.remove('fade-in');
        }

        // Show the selected KHS content
        if (semester >= 1 && semester <= 8) {
            var selectedKhsContent = document.getElementById('khsContent' + semester);
            selectedKhsContent.classList.remove('hidden');
            selectedKhsContent.classList.add('fade-in');
        }
    });
</script>

<?php else: ?>
    <div class="row"> 
        <div class="col-lg-12 col-md-12 col-xl-12">
            <div class="card mb-4 text-center">
                <div class="card-body h-100">
                    <img src="<?= base_url('assets') ?>/images/svgicons/alert.svg" alt="" class="w-39">
                    <h5 class="mt-3 tx-18">Tutup</h5>
                    <p><?= $tgl->keterangan?></p>
                    <p>Tanggal Buka : <code><?php echo $tgl->tgl_buka; ?> <?php echo $tgl->bln_buka; ?> <?php echo $tgl->thn_buka; ?></code></p>
                    <p>Jam Buka: <code><?php echo $tgl->jam_buka; ?>:<?php echo $tgl->menit_buka; ?></code></p>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>




























<!-- Row untuk halaman belum buka -->

    <!-- <div class="row"> 
        <div class="col-lg-12 col-md-12 col-xl-12">
            <div class="card mb-4 text-center">
                <div class="card-body h-100">
                    <img src="<?= base_url('assets') ?>/images/svgicons/imac.svg" alt="" class="w-39">
                    <h5 class="mt-3 tx-18">Belum Di Buka</h5>
                    <a href="javascript:void(0);" class="">Tanggal Buka : <code><?php echo $tgl->tgl_buka; ?> <?php echo $tgl->bln_buka; ?> <?php echo $tgl->thn_buka; ?></code> Jam buka:<code><?php echo $tgl->jam_buka; ?>:<?php echo $tgl->menit_buka; ?></code></a>
                    <p>Jam Buka <code><?php echo $tgl->jam_buka; ?>:<?php echo $tgl->menit_buka; ?></code></p>
                </div>
            </div>
        </div>
    </div> -->


<!-- Row untuk halaman sudah buka -->
<!-- <?php if ($today >= $opening_date && $today <= $closing_date): ?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-xl-12">
            <div class="card mb-4 text-center">
                <div class="card-body h-100">
                    <img src="" alt="" class="w-39">
                    <h5 class="mt-3 tx-18">Nilai UTS Anda</h5>
                    <a href="javascript:void(0);" class="">Check The Settings</a>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?> -->
<!-- Row untuk halaman sudah tutup -->

    <!-- <div class="row"> 
        <div class="col-lg-12 col-md-12 col-xl-12">
            <div class="card mb-4 text-center">
                <div class="card-body h-100">
                    <img src="<?= base_url('assets') ?>/images/svgicons/imac.svg" alt="" class="w-39">
                    <h5 class="mt-3 tx-18">Halaman Di Tutup</h5>
                    <a href="javascript:void(0);" class="">Tanggal Tutup : <code><?php echo $tgl->tgl_tutup; ?> <?php echo $tgl->bln_tutup; ?> <?php echo $tgl->thn_tutup; ?></code> Jam tutup:<code><?php echo $tgl->jam_tutup; ?>:<?php echo $tgl->menit_tutup; ?></code></a>
                    <p>Jam tutup <code><?php echo $tgl->jam_tutup; ?>:<?php echo $tgl->menit_tutup; ?></code></p>
                </div>
            </div>
        </div>
    </div> -->

    </div>
</div>
