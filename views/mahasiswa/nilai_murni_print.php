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
        .table-wrapper {
            overflow-x: auto;
        }
        table {
            width: 100%;
            margin-bottom: 20px;
            border-collapse: collapse;
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
        .bottom {
            font-size: 10px;
            margin-top: 1px;
        }

       
    </style>
</head>
<body>
    <div class="header">
        <img src="<?= base_url()?>/assets/images/header-ubsi.jpg" alt="Header UBSI">
    </div>
    <div class="container">
        <div class="title">Nilai Murni</div>
        <div class="student-info">
            <?php foreach ($mhs as $pri):?>
            <p><strong>Nim  :</strong> <?= $pri->nm_mhs ?></p>
            <p><strong>Nama :</strong> <?= $pri->nim ?></p>
            <p><strong>Kelas:</strong> <?= $pri->kd_lokal ?></p>
            <?php endforeach ?>
        </div>
        
        <div class="table-wrapper">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Mata Kuliah</th>
                        <th scope="col">SKS</th>
                        <th scope="col">Nilai UTS</th>
                        <th scope="col">Nilai UAS</th>
                        <th scope="col">Nilai Tugas</th>
                        <th scope="col">Nilai Absen</th>
                        <th scope="col">Grade</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $n = 1;
                    foreach($nilai as $nl): ?>
                    <tr>
                        <th scope="row">
                            <div class="d-flex align-items-center">
                                <?= $n++ ?>
                            </div>
                        </th>
                        <td><?= $nl->kd_mtk ?></td>
                        <td><?= $nl->nm_mtk ?></td>
                        <td><?= $nl->sks ?></td>
                        <td><?= $nl->nilai_uts ?></td>
                        <td><?= $nl->nilai_uas ?></td>
                        <td><?= $nl->total_nilai ?></td>
                        <td><?= $nl->nil_absen ?></td>
                        <td><?= $nl->grade_akhir ?></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        
        <div class="bottom">
            <p class="text-center mt-4">Pengolahan Nilai Murni Menggunakan Web ini adalah sah</p>
            <p class="text-center mt-4">Data Nilai Murni ini di Cetak Pada Tanggal <?= date('d-m-Y', strtotime($print_timestamp)) ?> Jam <?= date('H:i:s', strtotime($print_timestamp)) ?></p>
            <p class="text-center mt-4">Data di Update Pada Tanggal -- Jam</p>
        </div>
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
