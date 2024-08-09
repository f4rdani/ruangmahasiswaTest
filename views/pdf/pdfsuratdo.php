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

    <style>
        body {
            font-family: Arial, sans-serif;
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
            font-size: 14px;
            text-align: left;
            margin: 10px 0;
        }

        .title2 {
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            margin: 10px 0;
            padding-top: 50px;
            margin: 0;
            /* Remove default margin */
            line-height: 1.2;
        }

        .nosurat {
            font-size: 14px;
            text-align: center;
            font-weight: bold;
            margin: 10px 0;
            padding-top: 20px;
        }

        .student-info {
            margin-bottom: 10px;
            margin: 0;
            /* Remove default margin */
            line-height: 1.2;
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
            font-size: 10px;
            margin-top: 20px;
        }

        .biodata {

            padding-top: 20px;
        }

        .ttd {
            font-size: 14px;
            padding-left: 500px;

            padding-top: 20px;
        }

        .info {
            font-size: 14px;
            /* Adjust font size as needed */
        }

        .info-title {
            font-weight: bold;
            margin-bottom: 5px;
            /* Slight margin to separate title from list */
        }

        .info-item {
            margin: 0;
            /* Remove default margin */
            line-height: 1.2;
            /* Adjust line height for tighter spacing */
        }


        .table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }

        .label {
            width: 200px;
            vertical-align: top;
            padding-right: 10px;
            font-weight: bold;
        }

        .colon {
            width: 5px;
            vertical-align: top;
        }

        .content {

            text-align: justify;
        }

        .item {
            position: relative;
            margin: 0;
            text-indent: 0;
            padding-left: 25px;
            /* Adjust padding to make room for label */
        }

        .item-label {
            position: absolute;
            left: 0;
            top: 0;
            width: 20px;
            /* Width to ensure alignment */
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="<?= base_url() ?>/assets/images/header-ubsi.jpg" alt="Header UBSI">
    </div>
    <div class="container">


       

        <div class="title2">KEPUTUSAN REKTOR UNIVERSITAS BINA SARANA INFORMATIKA</div>
        <div class="nosurat">
            <p>NOMOR : 118/2.01/UBSI/II/2024</p>
            <p> TENTANG</p>
            <p> PEMBERHENTIAN DAN PENETAPAN STATUS KELUAR/MENGUNDURKAN DIRI
                SEBAGAI MAHASISWA UNIVERSITAS BINA SARANA INFORMATIKA
                TAHUN AKADEMIK <?php echo getAcademicYear(); ?></p>
            <p> REKTOR UNIVERSITAS BINA SARANA INFORMATIKA,</p>
        </div>


        <div class="student-info">
            <div class="biodata">
                <table class="table">
                    <tr>
                        <td class="label">Menimbang</td>
                        <td class="colon">:</td>
                        <td class="content">
                            <p class="item"><span class="item-label">a.</span> Bahwa Universitas Bina Sarana Informatika berkewajiban untuk menghasilkan
                                lulusan yang berkualitas sebagai perwujudan tanggung jawab moral pada bangsa
                                dan negara Indonesia;</p>
                            <p class="item"><span class="item-label">b.</span> Bahwa untuk menjaga kualitas pendidikan dan lulusan perlu dilakukan evaluasi
                                hasil studi mahasiswa;</p>
                            <p class="item"><span class="item-label">c.</span> Bahwa berdasarkan evaluasi hasil studi mahasiswa terdapat mahasiswa yang tidak
                                memenuhi syarat untuk melanjutkan studinya dan karenanya harus diberhentikan
                                sebagai mahasiswa Universitas Bina Sarana Informatika;</p>
                            <p class="item"><span class="item-label">d.</span> Bahwa berdasarkan pertimbangan sebagaimana dimaksudkan dalam huruf a, b
                                dan c di atas, perlu diterbitkannya surat keputusan Rektor tentang pemberhentian
                                dan penetapan status keluar/mengundurkan diri sebagai mahasiswa Universitas
                                Bina Sarana Informatika</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="label">Mengingat</td>
                        <td class="colon">:</td>
                        <td class="content">
                            <p class="item"><span class="item-label">1.</span> Undang-Undang Republik Indonesia Nomor 20 Tahun 2003 tentang Sistem
                                Pendidikan Nasional;</p>
                            <p class="item"><span class="item-label">2.</span> Undang-Undang Nomor 12 Tahun 2012 tentang Pendidikan Tinggi</p>
                            <p class="item"><span class="item-label">3.</span> Peraturan Pemerintah Nomor 4 Tahun 2014 tentang Penyelenggaraan Pendidikan
                                Tinggi dan Pengelolaan Perguruan Tinggi;</p>
                            <p class="item"><span class="item-label">4.</span> Peraturan Menteri Riset, Teknologi, dan Pendidikan Tinggi Republik Indonesia
                                Nomor 44 Tahun 2015 tentang Standar Nasional Pendidikan Tinggi;</p>
                            <p class="item"><span class="item-label">5.</span> Keputusan Menteri Riset, Teknologi, dan Pendidikan Tinggi Republik Indonesia
                                Nomor 732/KPT/I/2018 tentang Izin Penyatuan dan Perubahan Bentuk Beberapa
                                Perguruan Tinggi Swasta Menjadi Universitas Bina Sarana Informatika di Jakarta
                                yang diselenggarakan oleh Yayasan Bina Sarana Informatika;-Undang</p>
                            <p class="item"><span class="item-label">6.</span> Peraturan Yayasan Bina Sarana Informatika Nomor 300/Y-BSI/IX/2018 tanggal
                                19 September 2018 tentang Statuta Universitas Bina Sarana Informatika;</p>
                            <p class="item"><span class="item-label">7.</span> Keputusan Rektor Bina Sarana Informatika Nomor 004/1.01/UBSI/IX/2018
                                tanggal 21 September 2018 tentang Struktur Organisasi dan Tata Kerja
                                Universitas Bina Sarana Informatika; </p>
                            <p class="item"><span class="item-label">8.</span> Keputusan Rektor Universitas Bina Sarana Informatika Nomor
                                012/1.01/UBSI/IX/2018 tanggal 24 September 2018 tentang Peraturan Akademik
                                Universitas Bina Sarana Informatika.</p>

                        </td>
                    </tr>
                    <tr>
                        <td class="label"> Memperhatikan</td>
                        <td class="colon">:</td>
                        <td class="content">
                            <p class="item"><span class="item-label"></span> Hasil rapat pimpinan tanggal 12 Februari 2024 di Jakarta.</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="label"> Menetapkan</td>
                        <td class="colon">:</td>
                        <td class="content">
                            <p class="item"><span class="item-label"></span> PEMBERHENTIAN DAN PENETAPAN STATUS
                                KELUAR/MENGUNDURKAN DIRI SEBAGAI MAHASISWA
                                UNIVERSITAS BINA SARANA INFORMATIKA;</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="label"> Pertama</td>
                        <td class="colon">:</td>
                        <td class="content">
                            <p class="item"><span class="item-label"></span> Memberhentikan dan menetapkan status keluar/mengundurkan diri kepada
                                Saudara/i  <?php echo $nama; ?> NIM : <?php echo $nim; ?> sebagai mahasiswa Universitas
                                Bina Sarana Informatika karena tidak melakukan registrasi pada semester atau
                                aktivasi perkuliahan pada semester yang diikuti; </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="label"> Kedua</td>
                        <td class="colon">:</td>
                        <td class="content">
                            <p class="item"><span class="item-label"></span> Nama mahasiswa yang disebut dalam diktum Pertama tidak diperkenankan
                                melanjutkan studi pada Program Studi yang ditempuh;</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="label"> Ketiga</td>
                        <td class="colon">:</td>
                        <td class="content">
                            <p class="item"><span class="item-label"></span> Keputusan berlaku terhitung mulai semester Gasal Tahun Akademik 2023/2024;
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="label"> Keempat</td>
                        <td class="colon">:</td>
                        <td class="content">
                            <p class="item"><span class="item-label"></span> Keputusan ini berlaku sejak ditetapkan;</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="label"> Kelima</td>
                        <td class="colon">:</td>
                        <td class="content">
                            <p class="item"><span class="item-label"></span> Apabila ditemukan kekeliruan dikemudian hari, akan dilakukan perbaikan
                                sebagaimana mestinya.</p>
                        </td>
                    </tr>
                </table>


            </div>
        </div>

        <div class="ttd">
            <p> Ditetapkan di Jakarta, </p>
            <p>Pada tanggal : <?php date_default_timezone_set('Asia/Jakarta');
                                echo date('d F Y'); ?> </p>

            <p style="padding-top: 50px;"> Prof. Dr. Ir. Mochamad Wahyudi, M.Kom, MM, M.Pd, IPU,
                ASEAN Eng</p>

        </div>

        <div class="info">
            <p class="info-title">Tembusan :</p>
            <p class="info-item">1. Ketua Yayasan Bina Sarana Informatika</p>
            <p class="info-item">2. Wakil Rektor</p>
            <p class="info-item">3. Dekan/Kepala UPPS (KK)</p>
            <p class="info-item">4. Kepala Badan/Kepala Biro</p>
            <p class="info-item">5. Ketua Program Studi</p>
            <p class="info-item">6. Ybs</p>
            <p class="info-item">7. Arsip</p>
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
