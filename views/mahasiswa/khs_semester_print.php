
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <link rel="bsi icon" type="image/x-icon" href="favicon.ico">
  <title>Ruang Mahasiswa Bina Sarana Informatika</title>
</head>

<script>
    function updateDateTime() {
        const now = new Date();

        // Format date as "08 Agustus 2024"
        const options = { year: 'numeric', month: 'long', day: 'numeric' };
        const formattedDate = now.toLocaleDateString('id-ID', options);
        document.getElementById('current-date').textContent = formattedDate;

        // Update the new span with the formatted date
        document.getElementById('current-date-2').textContent = formattedDate;

        // Update the time
        const time = now.toLocaleTimeString();
        document.getElementById('current-time').textContent = time;
    }

    window.onload = updateDateTime;
</script>

<body>

    <table align="center" border="0">
    <tr>
      <td>
        <table align="center" border="0">
          <tr>
            <td>
              <div align="center">

                <img src="<?= base_url()?>/assets/images/header-ubsi.jpg" width="900" />
              </div>
            </td>
          </tr>
        </table>
        <link rel="stylesheet" href="style_new.css" type="text/css" />
        <p>
        <div align="center" style="width:884px;">

          <div align="left">
	<div id="aplikasicetak">

		<div class="ahead" align="center">KARTU HASIL STUDI (KHS) </div>

		<table border="0" cellpadding="0" cellspacing="0" width="62%" align="center">
			<tr>
				<td colspan="3" align="left"><strong>
						<font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="-1">&nbsp;</font>
					</strong></td>
			</tr>
			<tr>
				<td width="33%" align="left">
					<font size="-1">NIM</font>
				</td>
				<td width="2%" align="left"><strong>
						<font color="#000000" size="-1">:</font>
					</strong></td>
				<td width="65%" align="left"><strong>
						<font color="#000000" size="-1"><?php echo $student['nim']; ?></font>
					</strong></td>
			</tr>
			<tr>
				<td width="33%" align="left">
					<font size="-1">NAMA</font>
				</td>
				<td width="2%" align="left"><strong>
						<font color="#000000" size="-1">:</font>
					</strong></td>
				<td width="65%" align="left"><strong>
						<font color="#000000" size="-1"><?php echo $student['nm_mhs']; ?></font>
					</strong></td>
			</tr>
			<tr>
				<td width="33%" align="left">
					<font size="-1">PROGRAM STUDI</font>
				</td>
				<td width="2%" align="left"><strong>
						<font color="#000000" size="-1">:</font>
					</strong></td>
				<td width="65%" align="left"><strong>
						<font color="#000000" size="-1"><?php echo $student['nm_jrs']; ?></font>
					</strong></td>
			</tr>
			<tr>
				<td width="33%" align="left">
					<font size="-1">KELAS</font>
				</td>
				<td width="2%" align="left"><strong>
						<font color="#000000" size="-1">:</font>
					</strong></td>
				<td width="65%" align="left"><strong>
						<font color="#000000" size="-1"><?php echo $student['kd_lokal']; ?></font>
					</strong></td>
			</tr>
			<tr>
				<td colspan="3" align="left">
					<font face="Verdana, Arial, Helvetica, sans-serif" size="-1">&nbsp;</font>
				</td>
			</tr>
			<tr>
				<td colspan="3" align="left">
					<table border="1" cellspacing="0" width="100%">
						<tr>
							<td width="100%" colspan="3">
								<div align="center">

									<table width="624" align="center" cellpadding="0" bordercolor="#000000" border="1" cellspacing="0">
										<tr bgcolor="#99CCFF">
											<td width="23">
												<div align="center">
													<font color="#000000" face="Verdana, Arial, Helvetica, sans-serif" size="-2"><strong>No</strong></font>
												</div>
											</td>
											<td width="36">
												<div align="center">
													<font color="#000000" face="Verdana, Arial, Helvetica, sans-serif" size="-2"><strong>Kode</strong></font>
												</div>
											</td>
											<td width="253"><strong>
													<font color="#FFFFFF">
														<font color="#000000" face="Verdana, Arial, Helvetica, sans-serif" size="-2">Mata
															Kuliah </font>
													</font>
												</strong></td>
											<td width="35">
												<div align="center">
													<font color="#000000" face="Verdana, Arial, Helvetica, sans-serif" size="-2"><strong>sks</strong></font>
												</div>
											</td>
											<td width="31">
												<div align="center">
													<font color="#000000" face="Verdana, Arial, Helvetica, sans-serif" size="-2"><strong>Nilai</strong></font>
												</div>
											</td>
											<td width="40">
												<div align="center">
													<font color="#000000" face="Verdana, Arial, Helvetica, sans-serif" size="-2"><strong>Mutu </strong></font>
												</div>
											</td>
											<td width="133">
												<div align="center">
													<font color="#000000" face="Verdana, Arial, Helvetica, sans-serif" size="-2"><strong>Keterangan </strong></font>
												</div>
											</td>
										</tr>
                                        <?php 
                                        foreach ($penilaian_nim as $index => $row) : ?>
										<tr>
											<td>
												<div align="center">
													<font face="Verdana, Arial, Helvetica, sans-serif" size="-3"><?php echo $index + 1; ?> &nbsp; </font>
												</div>
											</td>
											<td>
												<div align="center">
													<font face="Verdana, Arial, Helvetica, sans-serif" size="-3"><?php echo $row['kd_mtk']; ?> &nbsp; </font>
												</div>
											</td>
											<td>
												<div align="left">
													<font face="Verdana, Arial, Helvetica, sans-serif" size="-3"><?php echo $row['nm_mtk']; ?> &nbsp;</font>
												</div>
											</td>
											<td>
												<div align="center">
													<font face="Verdana, Arial, Helvetica, sans-serif" size="-3"> <?php echo $row['sks']; ?>&nbsp; </font>
												</div>
											</td>
											<td>
												<div align="center">
													<font face="Verdana, Arial, Helvetica, sans-serif" size="-3"> <?php echo $row['grade_akhir']; ?>&nbsp; </font>
												</div>
											</td>
											<td>
												<div align="center">
													<font face="Verdana, Arial, Helvetica, sans-serif" size="-3"> <?php echo $row['nmutu']; ?>&nbsp; </font>
												</div>
											</td>
											<td>
												<div align="center">
													<font face="Verdana, Arial, Helvetica, sans-serif" size="-3">
													</font>
												</div>
											</td>
										</tr>
                                        <?php endforeach;?>
									</table>
								</div>
							</td>
						</tr>
					</table>


					<table width="624" border="1" align="center" cellpadding="" cellspacing="0" bgcolor="#CCCCCC" tr="tr" bordercolor="#000000">
						<tr bordercolor="#000000" bgcolor="#FFFFFF">
							<td width="106" rowspan="5">
								<div align="center">
									<font face="Verdana, Arial, Helvetica, sans-serif" size="-3">BOBOT
										NILAI <br />
										-----------<br />
										A = 4<br />
										B = 3<br />
										C = 2<br />
										D = 1<br />
										E = 0</font>
								</div>
							</td>
							<td width="285">
								<font face="Verdana, Arial, Helvetica, sans-serif" size="-3">TOTAL
									MUTU</font>
							</td>
							<td width="233">: <?php echo $totalMutu; ?> </td>
						</tr>
						<tr bordercolor="#000000" bgcolor="#FFFFFF">
							<td>
								<font face="Verdana, Arial, Helvetica, sans-serif" size="-3">TOTAL
									SKS YANG TELAH DIAMBIL</font>
							</td>
							<td>: <?php echo $totalSKS; ?></td>
						</tr>
						<tr>
							<td bgcolor="#FFFFFF">
								<font face="Verdana, Arial, Helvetica, sans-serif" size="-3">INDEKS
									PRESTASI KUMULATIF (IPK)</font>
							</td>
							<td bgcolor="#FFFFFF">: <?php echo $ipk; ?></td>
						</tr>
						<tr>
							<td colspan="2" bgcolor="#FFFFFF" align="center">
								<font size="-2">
									<style>
div.b128{
    border-left: 1px black solid;
	height: 30px;
}	
</style>

Security Print Key : <table cellpadding=0 cellspacing=0><tr><td><div class="b128" style="border-left-width:2;width:1"></div><td><div class="b128" style="border-left-width:1;width:2"></div><td><div class="b128" style="border-left-width:1;width:4"></div><td><div class="b128" style="border-left-width:1;width:3"></div><td><div class="b128" style="border-left-width:2;width:3"></div><td><div class="b128" style="border-left-width:1;width:1"></div><td><div class="b128" style="border-left-width:3;width:1"></div><td><div class="b128" style="border-left-width:1;width:2"></div><td><div class="b128" style="border-left-width:2;width:2"></div><td><div class="b128" style="border-left-width:1;width:2"></div><td><div class="b128" style="border-left-width:3;width:2"></div><td><div class="b128" style="border-left-width:2;width:1"></div><td><div class="b128" style="border-left-width:1;width:2"></div><td><div class="b128" style="border-left-width:2;width:1"></div><td><div class="b128" style="border-left-width:3;width:2"></div><td><div class="b128" style="border-left-width:3;width:2"></div><td><div class="b128" style="border-left-width:1;width:1"></div><td><div class="b128" style="border-left-width:2;width:2"></div><td><div class="b128" style="border-left-width:1;width:2"></div><td><div class="b128" style="border-left-width:3;width:2"></div><td><div class="b128" style="border-left-width:2;width:1"></div><td><div class="b128" style="border-left-width:2;width:2"></div><td><div class="b128" style="border-left-width:3;width:1"></div><td><div class="b128" style="border-left-width:1;width:2"></div><td><div class="b128" style="border-left-width:1;width:2"></div><td><div class="b128" style="border-left-width:2;width:1"></div><td><div class="b128" style="border-left-width:3;width:2"></div><td><div class="b128" style="border-left-width:1;width:3"></div><td><div class="b128" style="border-left-width:2;width:1"></div><td><div class="b128" style="border-left-width:1;width:3"></div><td><div class="b128" style="border-left-width:2;width:1"></div><td><div class="b128" style="border-left-width:3;width:2"></div><td><div class="b128" style="border-left-width:1;width:2"></div><td><div class="b128" style="border-left-width:1;width:3"></div><td><div class="b128" style="border-left-width:1;width:1"></div><td><div class="b128" style="border-left-width:2;width:3"></div><td><div class="b128" style="border-left-width:1;width:2"></div><td><div class="b128" style="border-left-width:2;width:1"></div><td><div class="b128" style="border-left-width:3;width:2"></div><td><div class="b128" style="border-left-width:1;width:1"></div><td><div class="b128" style="border-left-width:1;width:3"></div><td><div class="b128" style="border-left-width:2;width:3"></div><td><div class="b128" style="border-left-width:2;width:2"></div><td><div class="b128" style="border-left-width:3;width:2"></div><td><div class="b128" style="border-left-width:1;width:1"></div><td><div class="b128" style="border-left-width:1;width:3"></div><td><div class="b128" style="border-left-width:2;width:3"></div><td><div class="b128" style="border-left-width:1;width:1"></div><td><div class="b128" style="border-left-width:1;width:2"></div><td><div class="b128" style="border-left-width:2;width:1"></div><td><div class="b128" style="border-left-width:3;width:2"></div><td><div class="b128" style="border-left-width:2;width:2"></div><td><div class="b128" style="border-left-width:1;width:1"></div><td><div class="b128" style="border-left-width:3;width:2"></div><td><div class="b128" style="border-left-width:2;width:2"></div><td><div class="b128" style="border-left-width:1;width:2"></div><td><div class="b128" style="border-left-width:3;width:1"></div><td><div class="b128" style="border-left-width:2;width:2"></div><td><div class="b128" style="border-left-width:3;width:1"></div><td><div class="b128" style="border-left-width:1;width:2"></div><td><div class="b128" style="border-left-width:1;width:2"></div><td><div class="b128" style="border-left-width:2;width:1"></div><td><div class="b128" style="border-left-width:3;width:2"></div><td><div class="b128" style="border-left-width:1;width:2"></div><td><div class="b128" style="border-left-width:3;width:1"></div><td><div class="b128" style="border-left-width:2;width:2"></div><td><div class="b128" style="border-left-width:1;width:1"></div><td><div class="b128" style="border-left-width:2;width:3"></div><td><div class="b128" style="border-left-width:1;width:3"></div><td><div class="b128" style="border-left-width:1;width:1"></div><td><div class="b128" style="border-left-width:1;width:3"></div><td><div class="b128" style="border-left-width:2;width:3"></div><td><div class="b128" style="border-left-width:1;width:1"></div><td><div class="b128" style="border-left-width:2;width:2"></div><td><div class="b128" style="border-left-width:1;width:4"></div><td><div class="b128" style="border-left-width:2;width:3"></div><td><div class="b128" style="border-left-width:3;width:1"></div><td><div class="b128" style="border-left-width:1;width:1"></div><td><div class="b128" style="border-left-width:2;width:0"></div><tr><td  colspan=158 align=center><font family=arial size=2><b>F81-916-E5B-A2F-346-0DA</table></font>
							</td>
						</tr>
						<tr>
                            <td height="20" colspan="2" bgcolor="#FFFFFF" align="center">
                                <font face="Verdana, Arial, Helvetica, sans-serif">&nbsp; </font>
                                <font size="1" face="Verdana, Arial, Helvetica, sans-serif">
                                    &lt;Pengolahan Data KHS Menggunakan Web ini adalah sah&gt;<br />
                                    Data KHS ini di Cetak Pada Tanggal <span id="current-date"></span> Jam <span id="current-time"></span><br />
                                    Data di Update Pada Tanggal -- Jam
                                </font>
                            </td>
						</tr>
					</table>



				</td>
			</tr>
		</table>
		<p align="right" style="margin-top:55px; margin-right:130px;">Jakarta, <span id="current-date-2"></span><br style='margin-top:10px;'>Ketua Program Studi Teknologi Informasi <br>  <br style='margin-top:10px;'>
				<p align='right' style='margin-right:170px;'></p><p align='right' style='margin-top:25px;margin-right:130px;'>Hendra Supendar, M.Kom</p></p>
	</div>

	<!-- Ini Buat  Penutup Tampilan -->
</div>
        </div>
        </p>

        <table align="center" border="0">
          <tr>
            <td>
              <div align="center">

                <img src="<?= base_url()?>/assets/images/footer-ubsi.jpg" width="900" />              </div>
            </td>
          </tr>
        </table>

      </td>
    </tr>
  </table>
</body>

</html>
