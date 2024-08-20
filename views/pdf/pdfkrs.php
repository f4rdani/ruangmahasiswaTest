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



        .student-info {
            margin-bottom: 10px;
        }

        .student-info p {
            margin: 5px 0;
        }


        .table-bordered th,
        .table-bordered td {
            border: 1px solid #000 !important;
        }

        .text-right {
            text-align: right;
        }

        .table {
            border-collapse: collapse;
            /* Pastikan border tabel menyatu */
            border: 1px solid #000;
            /* Border untuk bagian luar tabel */
            margin-bottom: 0px;
        }

        .table th,
        .table td {
            border: none;
            /* Hapus border dari sel */
            vertical-align: middle;
        }
        .biodata {
            font-size: 15px;
            padding-left: 100px;
            padding-right: 100px;
            padding-top: 20px;
            line-height: 1.0;
        }
        .bd {
            background-color: #80e5ff !important;
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="<?= base_url() ?>/assets/images/header-ubsi.jpg" alt="Header UBSI">
    </div>
    <div class="container">


        <div class="student-info">

            <div class="biodata">
                <table class="table ">
                    <tr>
                        <td>NIM</td>
                        <td style="width: 5px;">:</td>
                        <td><?php echo $mhs->nim; ?></td>
                        <td>Kelas</td>
                        <td style="width: 5px;">:</td>
                        <td><?php echo $mhs->kd_lokal; ?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td style="width: 5px;">:</td>
                        <td><?php echo $mhs->nm_mhs; ?></td>
                        <td>Keterangan</td>
                        <td style="width: 5px;">:</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Program</td>
                        <td style="width: 5px;">:</td>
                        <td>Sarjana (S1)</td>
                        <td>Kel Ujian</td>
                        <td style="width: 5px;">:</td>
                        <td> <?php echo $mhs->kd_lokal; ?>.A</td>
                    </tr>
                    <tr>
                        <td>Semester</td>
                        <td style="width: 5px;">:</td>
                        <td><?php $semester = preg_replace('/[^0-9]/', '', explode('.', $mhs->kd_lokal)[1]);
                            echo $semester; ?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>

                <table class="table table-bordered ">
                    <thead class="bd">
                        <tr>
                            <th rowspan="3">No</th>
                            <th rowspan="3">Kode</th>
                            <th rowspan="3">Mata Kuliah</th>
                            <th rowspan="3">sks</th>
                            <th colspan="4" class="text-center">Paraf</th>
                        </tr>
                        <tr>

                            <th class="text-center" colspan="2">UTS</th>
                            <th class="text-center" colspan="2">UAS</th>
                        </tr>
                        <tr>

                            <th class="text-center">Tgl/Prf</th>
                            <th> Kd</th>
                            <th class="text-center">Tgl/Prf</th>
                            <th> Kd</th>
                        </tr>
                    </thead>
                    <tbody style=" background-color:#80e5ff">
                        <?php $n = 0;
                        $total_sks = 0;
                        foreach ($jadwal as $i): $n++;
                            $total_sks += $i->sksajar; ?>
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
                    <tfoot>
                        <tr>
                            <td colspan="8" class="text-center">Security Print Key: <br> Barcode <br> 87Xxx-xxx-xxx <br></td>
                        </tr>
                        <tr>
                            <td colspan="8" class="text-center">Pengelola Data KRS Menggunakan Web ini adalah sah</td>
                        </tr>
                        <tr>
                            <td colspan="8" class="text-center">KRS ini di cetak pada Tanggal <?php
                                                                                                date_default_timezone_set('Asia/Jakarta');
                                                                                                echo date('d F Y ') . 'Jam: ' . date('H:i:s');
                                                                                                ?>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
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