<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">
<head>
    <meta charset="UTF-8">
    <title>Nilai Murni Hasil Pengolahan Lembar Jawaban OCR</title>

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url()?>/assets/images/logo_ubsi.png" type="image/x-icon">
    
    <!-- Bootstrap Css -->
    <link id="style" href="<?= base_url()?>/assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">



    <!-- Custom styles -->
    <style>
     
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
           
        }
        .header img, .footer img {
    width: 100%;
    height: auto;
}
.header, .footer {
            max-width: 900px;
            margin: 0 auto;
            padding: 1px;
}
        .title {
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            margin: 10px 0;
            text-decoration: underline;
        }
        .student-info {
            margin-bottom: 10px;
        }
        .student-info p {
            margin: 5px 0;
        }
        table {
            width: 100%;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #000;
            padding: 5px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .notes {
            font-size: 12px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="header">
            <img src="<?= base_url()?>/assets/images/header-ubsi.jpg" alt="Header UBSI">
        </div>
    <div class="container">
        
        
        <div class="title">NILAI MURNI HASIL PENGOLAHAN LEMBAR JAWABAN OCR</div>
        
        <div class="student-info">
            <?php foreach ($mhs as $pri):?>
            <p><strong>Nama:</strong> <?= $pri->nm_mhs ?></p>
            <p><strong>No Induk:</strong> <?= $pri->nim ?></p>
            <p><strong>Jurusan:</strong> <?= $pri->nm_jrs ?></p>
            <p><strong>Kelas:</strong> <?= $pri->kd_lokal ?></p>
            <p><strong>Jenis:</strong> UAS (Ujian Akhir Semester)</p>
            <?php endforeach ?>
        </div>
        
        <table>
                            <thead>
                                <tr>
                                    <th class="w-20">No</th>
                                    <th class="w-40">kode</th>
                                    <th class="text-center">Materi Ujian</th>
                                    <th>Status</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($e as $uas): ?>
                                <tr>
                                    <td>1</td>
                                    <td class="fs-12"><?=  $uas->kd_ujn ?></td>
                                    <td class="text-center"><?=  $uas->nm_mtk ?></td>
                                    <td>K: <?=  $uas->knc_jwb ?> <br>J: <?=  $uas->cek ?>  
                                    </td>
                                    <td>B : <?=  $uas->benar ?> <br> P : <?=  $uas->nilai_soal ?>  <br> N : <?=  $uas->nilai ?></td>
                                </tr>
                                <?php endforeach; ?>
                                <tr>
                                   
                                    <td class="text-center" style="white-space: nowrap;" colspan="5">DATA PRAKTEK TIDAK TERSEDIA</td>
                                  
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        <table  style="width: 100%; margin: 0;">
                                            <tr>
                                                <td style="border-right: 1px solid; width: 33%; vertical-align: top;">
                                                    <div class="invoice-notes">
                                                        <label class="main-content-label fs-13">Keterangan</label>
                                                        <p class="fw-normal fs-13">(.) Benar <br> (A..E) Salah <br> (*) Salah (2 jawaban)</p>
                                                    </div>
                                                </td>
                                                <td style="border-right: 1px solid; width: 33%; vertical-align: top;">
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
                                <td class="text-center" style="white-space: nowrap;" colspan="5"><a href="<?= base_url('Mahasiswa/print_uas') ?>" style="color: red;">OPSI CETAK</a></td>
                                </tr>
                                <tr>
                                    <td class="text-center" colspan="5">
                                        <a>Klik pada halaman <a href="" style="color: blue;">Disini</a> apabila ada matakuliah yang belum tercantum Data dan nilainya pada halaman ini.</a>
                                    </td>
                                </tr>
                                
                            </tbody>
                            </table>
    </div>
    <div class="footer">
            <img src="<?= base_url()?>/assets/images/footer-ubsi.jpg" alt="Footer UBSI">
        </div>

    <!-- JavaScript libraries -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="<?= base_url()?>/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url()?>/assets/js/main.js"></script>
</body>
</html>