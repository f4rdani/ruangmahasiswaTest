<!DOCTYPE html>
<html>
<head>
    <title>Surat Keterangan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            text-align: center;
        }
        .content {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Surat Keterangan Mahasiswa</h1>
        <h2>Universitas Bina Sarana Informatika</h2>
        <hr>
    </div>
    <div class="content">
        <p>No.162337/4.01/BSI/VII/2024</p>
        <p>Dengan ini Rektor Universitas Bina Sarana Informatika, menerangkan bahwa:</p>
        <p>Nama : <?php echo $mhs->nm_mhs; ?></p>
        <p>NIM : <?php echo $mhs->nim; ?></p>
        <p>Tempat/Tgl. Lahir : <?php echo $mhs->t_lhr; ?>, <?php echo date('d F Y', strtotime($mhs->tgl_lhr)); ?></p>
        <p>Alamat : <?php echo $mhs->alm; ?> <?php echo $mhs->no_rmh; ?> RT/RW <?php echo $mhs->rt_rw; ?> <?php echo $mhs->kecamatan; ?> <?php echo $mhs->kelurahan; ?> <?php echo $mhs->kota; ?> </p>
        <p>Jenjang Pendidikan : Strata 1 <code>s</code></p>
        <p>Program Studi : <?php echo $studi->prodi; ?></p>
        <p>Semester : 6 <code>s</code></p>
        <p>Tahun Akademik : 2023/2024 <code>s</code></p>
        <p>Adalah benar Mahasiswa/i Universitas Bina Sarana Informatika Program Studi (<?php echo $studi->prodi; ?>) Program Strata 1 dan tercatat aktif pada Semester Ganjil 2023/2024. Demikian surat keterangan ini dibuat agar dipergunakan sebagaimana mestinya.</p>
        <p>Jakarta, <?php echo date('d F Y'); ?></p>
        <p>Rektor</p>
        <p>Prof. Dr. Ir. Mochamad Wahyudi, M.Kom, MM, M.Pd, IPU, ASEAN Eng</p>
        <p>Info :</p>
        <ul>
            <li>Pembuatan surat keterangan ini adalah sah, tidak perlu menyertakan Stempel dan tanda tangan</li>
            <li>Pencetakan telah menggunakan login dengan Security Print Key : 0A5-88E-A8B-A2F-8DB</li>
            <li>Surat Riset ini dicetak pada Tanggal <?php echo date('d-m-Y'); ?> Jam <?php echo date('h:i:s:A'); ?></li>
        </ul>
    </div>
</body>
</html>
