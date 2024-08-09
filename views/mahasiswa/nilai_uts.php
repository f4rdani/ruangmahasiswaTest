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
    <!-- Start::app-content -->
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title fs-21 mb-1">NILAI MURNI HASIL PENGOLAHAN LEMBAR JAWABAN OCR</h5>
                    </div>
                </div>
                <!-- Page Header Close -->

               <!-- Start::row-1 -->
<div class="row">
    <div class="col-md-12 col-xl-12">
        <div class="main-content-body-invoice">
            <div class="card card-invoice">
                <div class="card-body">
                    <div class="billed-from">
                    <?php foreach ($mhs as $pri):?>
                        <p><strong>Nama :</strong> <?= $pri->nm_mhs ?></p>
                        <p><strong>No Induk :</strong> <?= $pri->nim ?></p>
                        <p><strong>Jurusan :</strong> <?= $pri->nm_jrs ?></p>
                        <p><strong>Kelas :</strong> <?= $pri->kd_lokal ?></p>
                        <p><strong>Jenis :</strong> UTS (Ujian Tengah Semester)</p>
                        <?php endforeach ?>
                    </div><!-- billed-from -->
                    <div class="table-responsive mt-4">
                        <table class="table table-invoice border text-md-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th class="w-20">No</th>
                                    <th class="w-40">Kode</th>
                                    <th class="text-center">Materi Ujian</th>
                                    <th>Status</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <<?php foreach ($e as $uts): ?>
                                <tr>
                                    <td>1</td>
                                    <td class="fs-12"><?=  $uts->kd_ujn ?></td>
                                    <td class="text-center"><?=  $uts->nm_mtk ?></td>
                                    <td>K: <?=  $uts->knc_jwb ?> <br>J: <?=  $uts->cek ?>  
                                    </td>
                                    <td>B : <?=  $uts->benar ?> <br> P : <?=  $uts->nilai_soal ?>  <br> N : <?=  $uts->nilai ?></td>
                                </tr>
                                <?php endforeach; ?>
                                
                                
                        
                                <tr>
                                   
                                    <td class="text-center" style="white-space: nowrap;" colspan="5">DATA PRAKTEK TIDAK TERSEDIA</td>
                                  
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        <table class="table table-bordered" style="width: 100%; margin: 0;">
                                            <tr>
                                                <td style="border-right: 1px solid #dee2e6; width: 33%; vertical-align: top;">
                                                    <div class="invoice-notes">
                                                        <label class="main-content-label fs-13">Keterangan</label>
                                                        <p class="fw-normal fs-13">(.) Benar <br> (A..E) Salah <br> (*) Salah (2 jawaban)</p>
                                                    </div>
                                                </td>
                                                <td style="border-right: 1px solid #dee2e6; width: 33%; vertical-align: top;">
                                                    <div class="invoice-notes">
                                                        <label class="main-content-label fs-13">KODE: Kode Ujian</label>
                                                        <p class="fw-normal fs-13">K: Kunci Jawaban <br> J: Jawaban Ujian</p>
                                                    </div>
                                                </td>
                                                <td style="width: 33%; vertical-align: top;">
                                                    <div class="invoice-notes">
                                                        <label class="main-content-label fs-13">B: Jumlah Jawaban Benar</label>
                                                        <p class="fw-normal fs-13">P: Nilai Per Soal <br> N: Nilai Ujian (B * P)</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                <td class="text-center" style="white-space: nowrap;" colspan="5"><a href="<?= base_url('Mahasiswa/print_uts') ?>" style="color: red;">OPSI CETAK</a></td>
                                </tr>
                                <tr>
                                    <td class="text-center" colspan="5">
                                        <a>Klik pada halaman <a href="" style="color: blue;">Disini</a> apabila ada matakuliah yang belum tercantum Data dan nilainya pada halaman ini.</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- COL-END -->
</div>
<!--End::row-1 -->


        <!-- End::app-content -->
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
