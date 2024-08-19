<style>
  .side-menu__item {
    display: flex;
    align-items: center;
    padding: 10px 15px;
  }
  .side-menu__icon {
    margin-right: 10px;
    font-size: 20px; /* Adjust font size as needed */
    margin-top: -10px; /* Adjust this value to raise the icon */
  }
  .side-menu__label {
    flex-grow: 1; /* Ensures the label takes up the available space */
  }
  .side-menu__angle {
    margin-left: auto;
    font-size: 14px; /* Adjust font size as needed */
  }
</style>
<?php
$current_url = current_url(); // Get the current URL

function is_active($url) {
    global $current_url;
    return $current_url == base_url($url) ? 'active' : '';
}
?>
        <!-- Start::app-sidebar -->
        <aside class="app-sidebar sticky" id="sidebar">

            <!-- Start::main-sidebar-header -->
            <div class="main-sidebar-header" >
                <a href="<?=  base_url("auth")?>" class="header-logo">
                    <img src="../assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                    <img src="../assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                    <img src="../assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
                    <img src="../assets/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
                </a>
            </div>
            <!-- End::main-sidebar-header -->

            <!-- Start::main-sidebar -->
            <div class="main-sidebar" id="sidebar-scroll">

                <!-- Start::nav -->
                <nav class="main-menu-container nav nav-pills flex-column sub-open" >
                    <div class="slide-left" id="slide-left">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg>
                    </div>
                    <ul class="main-menu">
                        <?php if($this->session->userdata('role') == "admin"):?>
                            <li class="slide__category"><span class="category-name">Main</span></li>
                        <!-- End::slide__category -->

                        <!-- Start::slide -->
                        <li class="slide">
                            <a href="<?= base_url('Admin/dashboard') ?>" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg>
                                <span class="side-menu__label">Dashboard</span>
                            </a>
                        </li>
                        <!-- End::slide -->

                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">ADMINISTRATOR</span></li>
                        <!-- End::slide__category -->
							
                        <!-- Start::slide -->
                        <li class="slide">
                            <a  href="<?= base_url('Admin/pengumuman') ?>" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"  viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 4c-4.42 0-8 3.58-8 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm3.5 4c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zm-7 0c.83 0 1.5.67 1.5 1.5S9.33 11 8.5 11 7 10.33 7 9.5 7.67 8 8.5 8zm3.5 9.5c-2.33 0-4.32-1.45-5.12-3.5h1.67c.7 1.19 1.97 2 3.45 2s2.76-.81 3.45-2h1.67c-.8 2.05-2.79 3.5-5.12 3.5z" opacity=".3"/><circle cx="15.5" cy="9.5" r="1.5"/><circle cx="8.5" cy="9.5" r="1.5"/><path d="M12 16c-1.48 0-2.75-.81-3.45-2H6.88c.8 2.05 2.79 3.5 5.12 3.5s4.32-1.45 5.12-3.5h-1.67c-.69 1.19-1.97 2-3.45 2zm-.01-14C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/></svg>
                                <span class="side-menu__label">Pengumuman</span>
                            </a>
                        </li>
                        <li class="slide">
                            <a  href="<?= base_url('Admin/infomhs') ?>" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"  viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 4c-4.42 0-8 3.58-8 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm3.5 4c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zm-7 0c.83 0 1.5.67 1.5 1.5S9.33 11 8.5 11 7 10.33 7 9.5 7.67 8 8.5 8zm3.5 9.5c-2.33 0-4.32-1.45-5.12-3.5h1.67c.7 1.19 1.97 2 3.45 2s2.76-.81 3.45-2h1.67c-.8 2.05-2.79 3.5-5.12 3.5z" opacity=".3"/><circle cx="15.5" cy="9.5" r="1.5"/><circle cx="8.5" cy="9.5" r="1.5"/><path d="M12 16c-1.48 0-2.75-.81-3.45-2H6.88c.8 2.05 2.79 3.5 5.12 3.5s4.32-1.45 5.12-3.5h-1.67c-.69 1.19-1.97 2-3.45 2zm-.01-14C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/></svg>
                                <span class="side-menu__label">Info Dashboard Mahasiswa</span>
                            </a>
                        </li>
                        <li class="slide">
                            <a  href="<?= base_url('Admin/cfgtgl') ?>" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"  viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 4c-4.42 0-8 3.58-8 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm3.5 4c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zm-7 0c.83 0 1.5.67 1.5 1.5S9.33 11 8.5 11 7 10.33 7 9.5 7.67 8 8.5 8zm3.5 9.5c-2.33 0-4.32-1.45-5.12-3.5h1.67c.7 1.19 1.97 2 3.45 2s2.76-.81 3.45-2h1.67c-.8 2.05-2.79 3.5-5.12 3.5z" opacity=".3"/><circle cx="15.5" cy="9.5" r="1.5"/><circle cx="8.5" cy="9.5" r="1.5"/><path d="M12 16c-1.48 0-2.75-.81-3.45-2H6.88c.8 2.05 2.79 3.5 5.12 3.5s4.32-1.45 5.12-3.5h-1.67c-.69 1.19-1.97 2-3.45 2zm-.01-14C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/></svg>
                                <span class="side-menu__label">Konfigurasi Tanggal</span>
                            </a>
                        </li>
                        <li class="slide">
                            <a  href="<?= base_url('Admin/klndrak') ?>" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"  viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 4c-4.42 0-8 3.58-8 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm3.5 4c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zm-7 0c.83 0 1.5.67 1.5 1.5S9.33 11 8.5 11 7 10.33 7 9.5 7.67 8 8.5 8zm3.5 9.5c-2.33 0-4.32-1.45-5.12-3.5h1.67c.7 1.19 1.97 2 3.45 2s2.76-.81 3.45-2h1.67c-.8 2.05-2.79 3.5-5.12 3.5z" opacity=".3"/><circle cx="15.5" cy="9.5" r="1.5"/><circle cx="8.5" cy="9.5" r="1.5"/><path d="M12 16c-1.48 0-2.75-.81-3.45-2H6.88c.8 2.05 2.79 3.5 5.12 3.5s4.32-1.45 5.12-3.5h-1.67c-.69 1.19-1.97 2-3.45 2zm-.01-14C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/></svg>
                                <span class="side-menu__label">Kalender Akademik</span>
                            </a>
                        </li>
                        <li class="slide">
                            <a  href="<?= base_url('Admin/imhs') ?>" class="side-menu__item">
                                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"  viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 4c-4.42 0-8 3.58-8 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm3.5 4c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zm-7 0c.83 0 1.5.67 1.5 1.5S9.33 11 8.5 11 7 10.33 7 9.5 7.67 8 8.5 8zm3.5 9.5c-2.33 0-4.32-1.45-5.12-3.5h1.67c.7 1.19 1.97 2 3.45 2s2.76-.81 3.45-2h1.67c-.8 2.05-2.79 3.5-5.12 3.5z" opacity=".3"/><circle cx="15.5" cy="9.5" r="1.5"/><circle cx="8.5" cy="9.5" r="1.5"/><path d="M12 16c-1.48 0-2.75-.81-3.45-2H6.88c.8 2.05 2.79 3.5 5.12 3.5s4.32-1.45 5.12-3.5h-1.67c-.69 1.19-1.97 2-3.45 2zm-.01-14C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/></svg>
                                <span class="side-menu__label">Data Mahasiswa</span>
                            </a>
                        </li>
                        <!-- End::slide -->
                        <?php endif; ?>
                        <?php if($this->session->userdata('role') == "mahasiswa"):?>

                        <!-- Start::slide__category -->
                        <li class="slide__category"><span class="category-name">Mahasiswa</span></li>
                        <!-- End::slide__category -->
						
						
<li class="slide has-sub">
  <a href="javascript:void(0);" class="side-menu__item">
    <i class="fa fa-home side-menu__icon"></i>
    <span class="side-menu__label">beranda</span>
    <i class="fa fa-chevron-right side-menu__angle"></i>
  </a>
  <ul class="slide-menu child1">
    <li class="slide side-menu__label1">
      <a href="javascript:void(0);">beranda</a>
    </li>
    <li class="slide">
      <?php $current_url = current_url(); ?>
			<a href="<?= base_url('Mahasiswa') ?>" class="side-menu__item <?= (base_url('Mahasiswa') == $current_url) ? 'active' : '' ?>">Home</a>
    </li>
    <li class="slide">
      <a href="<?= base_url('Mahasiswa/verifikasi_data_pribadi') ?>" class="side-menu__item <?= (base_url('Mahasiswa/verifikasi_data_pribadi') == $current_url) ? 'active' : '' ?>">Verifikasi Data Pribadi</a>
    </li>
  </ul>
</li>

<li class="slide has-sub">
  <a href="javascript:void(0);" class="side-menu__item">
    <i class="fa fa-graduation-cap side-menu__icon"></i>
    <span class="side-menu__label">Nilai Mahasiswa</span>
    <i class="fa fa-chevron-right side-menu__angle"></i>
  </a>
  <ul class="slide-menu child1">
    <li class="slide side-menu__label1">
      <a href="javascript:void(0);">Nilai Mahasiswa</a>
    </li>
		<li class="slide">
			<a href="<?= base_url('Mahasiswa/nilai_uts') ?>" class="side-menu__item <?= ($this->uri->segment(2) == 'nilai_uts') ? 'active' : '' ?>">Nilai Murni UTS</a>
		</li>
		<li class="slide">
			<a href="<?= base_url('Mahasiswa/nilai_uas') ?>" class="side-menu__item <?= ($this->uri->segment(2) == 'nilai_uas') ? 'active' : '' ?>">Nilai Murni UAS</a>
		</li>
		<li class="slide">
			<a href="<?= base_url('Mahasiswa/nilai_murni') ?>" class="side-menu__item <?= ($this->uri->segment(2) == 'nilai_murni') ? 'active' : '' ?>">Hasil Ujian Murni</a>
		</li>
		<li class="slide">
			<a href="<?= base_url('Mahasiswa/nilai_her') ?>" class="side-menu__item <?= ($this->uri->segment(2) == 'nilai_her') ? 'active' : '' ?>">Nilai Murni HER</a>
		</li>
		<li class="slide">
			<a href="<?= base_url('Mahasiswa/khs') ?>" class="side-menu__item <?= ($this->uri->segment(2) == 'khs') ? 'active' : '' ?>">Kartu Hasil Studi</a>
		</li>
		<li class="slide">
			<a href="<?= base_url('Mahasiswa/khs_semester') ?>" class="side-menu__item <?= ($this->uri->segment(2) == 'khs_semester') ? 'active' : '' ?>">KHS Semester</a>
		</li>
		<li class="slide">
			<a href="<?= base_url('Mahasiswa') ?>" class="side-menu__item <?= ($this->uri->segment(2) == 'nilai_her_non_ocr_total') ? 'active' : '' ?>">Nilai HER Non OCR Dan Total</a>
		</li>
		<li class="slide">
			<a href="<?= base_url('Mahasiswa') ?>" class="side-menu__item <?= ($this->uri->segment(2) == 'nilai_uas_non_ocr_total') ? 'active' : '' ?>">Nilai UAS Non OCR Dan Total</a>
		</li>
  </ul>
</li>

<li class="slide has-sub">
  <a href="javascript:void(0);" class="side-menu__item">
    <i class="fa fa-user side-menu__icon"></i>
    <span class="side-menu__label">Data Mahasiswa</span>
    <i class="fa fa-chevron-right side-menu__angle"></i>
  </a>
  <ul class="slide-menu child1">
    <li class="slide side-menu__label1">
      <a href="javascript:void(0);">Data Mahasiswa</a>
    </li>
    <li class="slide">
      <a href="<?= base_url('Mahasiswa/datapribadi') ?>" class="side-menu__item <?= (base_url('Mahasiswa/datapribadi') == $current_url) ? 'active' : '' ?>">Data Pribadi Mahasiswa</a>
    </li>
    <li class="slide">
      <a href="<?= base_url('Mahasiswa') ?>" class="side-menu__item ">Kartu Rencana Studi</a>
    </li>
  </ul>
</li>

<li class="slide has-sub">
  <a href="javascript:void(0);" class="side-menu__item">
    <i class="fa fa-envelope side-menu__icon"></i>
    <span class="side-menu__label">Surat</span>
    <i class="fa fa-chevron-right side-menu__angle"></i>
  </a>
  <ul class="slide-menu child1">
    <li class="slide side-menu__label1">
      <a href="javascript:void(0);">Surat</a>
    </li>
    <li class="slide">
      <a href="<?= base_url('Mahasiswa/mhscuti') ?>" class="side-menu__item <?= (base_url('Mahasiswa/mhscuti') == $current_url) ? 'active' : '' ?>">Pengajuan Cuti Akademik</a>
    </li>
    <li class="slide">
      <a href="<?= base_url('Mahasiswa/pengajuan_mutasi_kampus') ?>" class="side-menu__item <?= (base_url('Mahasiswa/pengajuan_mutasi_kampus') == $current_url) ? 'active' : '' ?>">Pengajuan Mutasi Kampus</a>
    </li>
    <li class="slide">
      <a href="<?= base_url('Mahasiswa') ?>" class="side-menu__item">Pengajuan Aktif Cuti Akademik</a>
    </li>
    <li class="slide">
      <a href="<?= base_url('Mahasiswa/surat_keterangan') ?>" class="side-menu__item <?= (base_url('Mahasiswa/surat_keterangan') == $current_url) ? 'active' : '' ?>">Buat Surat Keterangan</a>
    </li>
    <li class="slide">
      <a href="<?= base_url('Mahasiswa/buat_surat_riset') ?>" class="side-menu__item <?= (base_url('Mahasiswa/buat_surat_riset') == $current_url) ? 'active' : '' ?>">Buat Surat Riset</a>
    </li>
    <li class="slide">
      <a href="<?= base_url('Mahasiswa/buat_surat_riset_tugas') ?>" class="side-menu__item <?= (base_url('Mahasiswa/buat_surat_riset_tugas') == $current_url) ? 'active' : '' ?>">Buat Surat Riset Tugas Kuliah</a>
    </li>
    <li class="slide">
      <a href="<?= base_url('Mahasiswa/suratperubahanbio') ?>" class="side-menu__item <?= (base_url('Mahasiswa/suratperubahanbio') == $current_url) ? 'active' : '' ?>">Buat Pengajuan Ubah Biodata</a>
    </li>
  </ul>
</li>

<li class="slide has-sub">
  <a href="javascript:void(0);" class="side-menu__item">
    <i class="fa fa-info-circle side-menu__icon"></i>
    <span class="side-menu__label">Info Akademik</span>
    <i class="fa fa-chevron-right side-menu__angle"></i>
  </a>
  <ul class="slide-menu child1">
    <li class="slide side-menu__label1">
      <a href="javascript:void(0);">Info Akademik</a>
    </li>
    <li class="slide">
      <a href="<?= base_url('Mahasiswa/klndrak') ?>" class="side-menu__item <?= (base_url('Mahasiswa/klndrak') == $current_url) ? 'active' : '' ?>">Kalender Akademik</a>
    </li>
    <li class="slide">
      <a href="<?= base_url('Mahasiswa/Jadwal_kuliah') ?>" class="side-menu__item">Jadwal Kuliah</a>
    </li>
    <li class="slide">
      <a href="<?= base_url('Mahasiswa/jadwal_mengajar') ?>" class="side-menu__item">Jadwal Mengajar Dosen</a>
    </li>
    <li class="slide">
      <a href="<?= base_url('Mahasiswa/emailstudi') ?>" class="side-menu__item">Email Program Studi</a>
    </li>
  </ul>
</li>

<li class="slide">
  <a href="<?= base_url('Auth/logoutmhs') ?>" class="side-menu__item">
    <i class="fa fa-sign-out-alt side-menu__icon"></i>
    <span class="side-menu__label">logout</span>
  </a>
</li>

                        
                        <!-- End::slide -->
                        <?php endif; ?>

                        
                    </ul>
                    <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
                </nav>
                <!-- End::nav -->

            </div>
            <!-- End::main-sidebar -->

        </aside>
        <!-- End::app-sidebar -->
