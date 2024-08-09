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
            font-size: 15px;
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
            font-size: 15px;
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
            font-size: 15px;
            padding-left: 100px;
            padding-right: 100px;
            padding-top: 20px;
            line-height: 0.8;
        }

        .ttd {
            font-size: 15px;
            padding-left: 350px;
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


        <div class="title" style="display: flex; justify-content: space-between; align-items: center;">
            <p>Nomor: <?php echo $surat_riset->no_surat; ?>/PKL/TI-BSI/B3/VIII/24</p>
            <p>Jakarta, <?php date_default_timezone_set('Asia/Jakarta');
                        echo date('d F Y'); ?></p>
        </div>
        <div class="title" style="margin-top: -20px;">	Hal:	Permohonan Riset/PKL</div>


        <div class="title2">
            <?php echo $surat_riset->ket; ?>
        </div>
      

        <div class="student-info">
        <div class="div" style="padding-top: 30px; text-align: justify;">
    Berkaitan dengan program pemerintah dibidang pendidikan dalam mewujudkan keterkaitan dan kesepadanan (Link and Match) antara pendidikan dengan dunia usaha, maka kami (Universitas Bina Sarana Informatika) mahasiswa yang akan menyelesaikan studinya diharuskan mengikuti Riset/PKL di instansi pemerintah maupun swasta.
    <br><br>
    Oleh karena itu kami mengajukan untuk dapat kiranya mahasiswa/i kami melaksanakan Riset/PKL di perusahaan/kantor/departemen/instasi yang Bapak/Ibu pimpin, dimana lama pelaksanaan Riset/PKL kurang lebih 3 - 6 (tiga sampai enam) bulan.
    <br><br>
    Adapun mahasiswa/i yang kami maksud adalah :
</div>

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
                        <td style="width: 200px;">Tempat/Tgl. Lahir </td>
                        <td style="width: 5px;">:</td>
                        <td> <?= $mhs->t_lhr ?>, <?= $mhs->tgl_lhr ?> </td>
                    </tr>
                    <tr>
                        <td style="width: 200px;">Alamat </td>
                        <td style="width: 5px;">:</td>
                        <td> <?= $mhs->alm ?></td>
                    </tr>
                    <tr>
                        <td style="width: 200px;">Program Pendidikan </td>
                        <td style="width: 5px;">:</td>
                        <td> ######### Strata Satu (S1)</td>
                    </tr>
                    <tr>
                        <td style="width: 200px;">Progarm Studi </td>
                        <td style="width: 5px;">:</td>
                        <td> <?php echo $studi->nm_jrs; ?></td>
                    </tr>
                    <tr>
                        <td style="width: 200px;">Semester </td>
                        <td style="width: 5px;">:</td>
                        <td> ##### 4</td>
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
           	
 
Demikianlah permohonan ini kami sampaikan. Atas perhatian dan kerjasama yang baik diucapkan terima kasih.
        </div>

        <div class="ttd">
        <p  style="border-bottom: 1px solid black; display: inline-block; padding-bottom: 5px;"> Prof. Dr. Ir. Mochamad Wahyudi, M.Kom, MM, M.Pd, IPU, ASEAN En</p>
            <p style="padding-left: 250px;">Rektor</p>
        </div>

        <div class="info">
            <p style="font-weight: bold;">info :</p>
            <p> 1. Pembuatan surat keterangan ini adalah sah, tidak perlu menyertakan Stempel dan tanda tangan</p>
            <p> 2. Pencetakan telah menggunakan login dengan Security Print Key :</p>
            <p> 3. Surat Riset ini di cetak pada Tanggal <?php echo $surat_riset->log_date; ?> ,Jam <?php echo $surat_riset->log_time; ?></p>
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