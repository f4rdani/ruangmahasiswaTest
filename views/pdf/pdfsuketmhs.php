<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url() ?>/assets/images/logo_ubsi.png" type="image/x-icon">

    <!-- Bootstrap Css -->
    <link id="style" href="<?= base_url() ?>/assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">



    <!-- Custom styles -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            /* Remove default margin */
            line-height: 1.2;
            /* Adjust line height for tighter spacing */
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;

        }

        .header img,
        .footer img {
            width: 100%;
            height: auto;
        }

        .header,
        .footer {
            max-width: 900px;
            margin: 0 auto;
            padding: 1px;
        }

        .title {
            font-size: 15px;
            text-align: left;
            margin: 10px 0;
        }

        .title2 {
            font-size: 25px;
            font-weight: bold;
            text-align: center;
            margin: 10px 0;
            padding-top: 20px;
        }

        .nosurat {
            font-size: 15px;
            text-align: center;
            margin: 10px 0;

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

        th,
        td {
            border: 1px solid #ffff;
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

        .biodata {
            padding-left: 100px;
            padding-right: 100px;
            padding-top: 20px;
        }

        .ttd {
            padding-left: 300px;
            padding-top: 20px;
        }

        .info {
            padding-top: 20px;
            font-size: 12px;
            margin: 0;
            /* Remove default margin */
            line-height: 0.2;
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="<?= base_url() ?>/assets/images/header-ubsi.jpg" alt="Header UBSI">
    </div>
    <div class="container">


        <div class="title">Surat Keterangan Mahasiswa Universitas Bina Sarana Informatika</div>

        <div class="title2">SURAT KETERANGAN</div>
        <div class="nosurat"> No.162337/4.01/BSI/VII/2024</div>

        <div class="student-info">
            <div class="div" style="padding-top: 30px;"> Dengan ini Rektor Universitas Bina Sarana Informatika, menerangkan bahwa:</div>
            <div class="biodata">
                <table class="table">
                    <tr>
                        <td style="width: 200px;">Nama </td>
                        <td style="width: 5px;">:</td>
                        <td> <?= $mhs->nm_mhs ?></td>
                    </tr>
                    <tr>
                        <td style="width: 200px;">Nim </td>
                        <td style="width: 5px;">:</td>
                        <td> <?= $mhs->nim ?></td>
                    </tr>
                    <tr>
                        <td style="width: 200px;">Alamat </td>
                        <td style="width: 5px;">:</td>
                        <td> <?= $mhs->alm ?></td>
                    </tr>
                    <tr>
                        <td style="width: 200px;">Jenjang Pendidikan </td>
                        <td style="width: 5px;">:</td>
                        <td> 17220245</td>
                    </tr>
                    <tr>
                        <td style="width: 200px;">Progarm Studi </td>
                        <td style="width: 5px;">:</td>
                        <td> <?php echo $studi->nm_jrs; ?></td>
                    </tr>
                    <tr>
                        <td style="width: 200px;">Semester </td>
                        <td style="width: 5px;">:</td>
                        <td><?php $semester = preg_replace('/[^0-9]/', '', explode('.', $mhs->kd_lokal)[1]);
                                                                    echo $semester; ?></td>
                    </tr>
                    <?php
                    function getAcademicYear()
                    {
                        date_default_timezone_set('Asia/Jakarta');
                        $currentYear = date('Y');
                        $startYear = $currentYear - 1;
                        $endYear = $currentYear;
                        return "$startYear-$endYear";
                    }
                    ?>

                    <tr>
                        <td style="width: 200px;">Tahun Akademik </td>
                        <td style="width: 5px;">:</td>
                        <td> <?php echo getAcademicYear(); ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="student-info" style="padding-top: 20px;">
            Adalah benar Mahasiswa/i Universitas Bina Sarana Informatika Program Studi (<?php echo $studi->nm_jrs; ?>) Program Strata 1
            dan tercatat aktif pada Semester Ganjil <?php echo getAcademicYear(); ?>. Demikian surat keterangan ini dibuat agar dipergunakan sebagaimana
            mestinya
        </div>

        <div class="ttd">
            <p> Jakarta, <?php
                            date_default_timezone_set('Asia/Jakarta');
                            echo date('d F Y');
                            ?></p>
            <p>Rektor</p>

            <p style="padding-top: 50px;"> Prof. Dr. Ir. Mochamad Wahyudi, M.Kom, MM, M.Pd, IPU, ASEAN En</p>


        </div>

        <div class="info">
            <p style="font-weight: bold;">info :</p>
            <p> 1. Pembuatan surat keterangan ini adalah sah, tidak perlu menyertakan Stempel dan tanda tangan</p>
            <p> 2. Pencetakan telah menggunakan login dengan Security Print Key :</p>
            <p> 3. Surat Riset ini di cetak pada Tanggal <?php echo $date; ?> ,Jam <?php echo $jam; ?></p>
        </div>



    </div>
    <div class="footer">
        <img src="<?= base_url() ?>/assets/images/footer-ubsi.jpg" alt="Footer UBSI">
    </div>

    <!-- JavaScript libraries -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="<?= base_url() ?>/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/main.js"></script>
</body>

</html>
