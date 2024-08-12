<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('upload');
    }

	public function index()
	{
		$data['data'] = $this->db->get('berita_index_mhs')->result();
		$data['announcements'] = $this->db->where('showed', 1)->get('berita_index_mhs')->result();
    if ($this->session->userdata('role')=="mahasiswa") {
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('mahasiswa/dashboard', $data);
		$this->load->view('layouts/footer');
    } else {
		redirect('Auth/Logoutmhs');
	}
	}
	public function klndrak()
	{
		if ($this->session->userdata('role')=="mahasiswa") {
		$data['data'] = $this->db->get('klndrak')->result();
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('mahasiswa/klnderak', $data);
		$this->load->view('layouts/footer', $data);
	} else {
		redirect('Auth/Logoutmhs');
	}
	}
	public function arsip_berita_mahasiswa()
	{
		if ($this->session->userdata('role')=="mahasiswa") {
		$data['data'] = $this->db->get('berita_index_mhs')->result();
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('mahasiswa/arsip_berita_mahasiswa', $data);
		$this->load->view('layouts/footer', $data);
	} else {
		redirect('Auth/Logoutmhs');
	}
	}
    public function emailstudi()
	{
		if ($this->session->userdata('role')=="mahasiswa") {
        $query = $this->db->get('email_prodi');
        $data['emails'] = $query->result(); // Get the result as an array of objects
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('mahasiswa/email_program_studi', $data);
		$this->load->view('layouts/footer', $data);
	} else {
		redirect('Auth/Logoutmhs');
	}
	}
	public function  buat_surat_riset()
    {
        $nim = $this->session->userdata('nim');
        $data['name'] = $this->session->userdata('name');
        $data['mhs'] = $this->db->get_where('mhs', ['nim' => $nim])->row();
        $data['riset'] = $this->db->get_where('surat_riset', ['nim' => $nim])->result();
        // Periksa peran pengguna
        if ($this->session->userdata('role') == "mahasiswa") {
            // Load views jika peran adalah mahasiswa
            $this->load->view('layouts/header');
            $this->load->view('layouts/sidebar');
            $this->load->view('mahasiswa/buat_surat_riset', $data);
            $this->load->view('layouts/footer');
        } else {
            // Redirect ke halaman logout jika bukan mahasiswa
            redirect('Auth/Logoutmhs');
        }
    }
    public function surat_riset_store()
    {
        // Ambil data mahasiswa berdasarkan nim
        $nim = $this->input->post('nim', true);
        $data['mhs'] = $this->db->get_where('mhs', ['nim' => $nim])->row();

        // Ambil nilai dari input form
        $nama = $this->input->post('nama', true);
        $ket = $this->input->post('ket', true);
        $no = 404837;

        // Atur timezone
        date_default_timezone_set('Asia/Jakarta');

        // Susun data untuk dimasukkan ke tabel suket_mhs
        $data_insert = array(
            'nim' => $nim,
            'nama' => $nama,
            'ket' => $ket,
            'no_surat' => $no,
            'log_date' => date('d-m-Y'),
            'log_time' => date('h:i:s:A'),
            'ip' => $this->input->ip_address(),
            'agen' => $this->input->user_agent(),
            'lokasi' => $data['mhs']->kd_lokal,
            'kd_lokal' => $data['mhs']->kd_lokal,
            'nm_mhs' => $data['mhs']->nm_mhs,
            'no_rmh' => $data['mhs']->no_rmh,
            'kota' => $data['mhs']->kota,
            'rt_rw' => $data['mhs']->rt_rw,
            'kd_pos' => $data['mhs']->kd_pos,
            'kd_jrs' => $data['mhs']->kd_jrs,
            'alm' => $data['mhs']->alm,
        );

        // Masukkan data ke tabel suket_mhs
        if ($this->db->insert('surat_riset', $data_insert)) {
            redirect('Mahasiswa');
        } else {
            echo 'Database insert failed';
            return;
        }
    }
    public function delete_suratriset($no)
    {
        $this->db->where('no', $no);
        $riset = $this->db->get('surat_riset')->row();

        if (!$riset) {
            echo 'Data tidak ditemukan';
            return;
        }
        $this->db->where('no', $no);
        if ($this->db->delete('surat_riset')) {
            echo 'Data berhasil dihapus';
            redirect('Mahasiswa/buat_surat_riset');
        } else {
            echo 'Gagal menghapus data';
        }
    }
	 public function  surat_keterangan()
    {
        $nim = $this->session->userdata('nim');
        $data['name'] = $this->session->userdata('name');
        $data['mhs'] = $this->db->get_where('mhs', ['nim' => $nim])->row();
        $data['suket_mhs'] = $this->db->get_where('suket_mhs', ['nim' => $nim])->result();

        // Lakukan join untuk mendapatkan nm_jrs
        $this->db->select('jrskampus.nm_jrs'); 
        $this->db->from('mhs');
        $this->db->join('jrskampus', 'mhs.kd_jrs = jrskampus.kd_jrs');
        $this->db->where('mhs.nim', $nim);
        $data['studi'] = $this->db->get()->row();
        // Periksa peran pengguna
        if ($this->session->userdata('role') == "mahasiswa") {
            // Load views jika peran adalah mahasiswa
            $this->load->view('layouts/header');
            $this->load->view('layouts/sidebar');
            $this->load->view('mahasiswa/surat_keterangan', $data);
            $this->load->view('layouts/footer');
        } else {
            // Redirect ke halaman logout jika bukan mahasiswa
            redirect('Auth/Logoutmhs');
        }
    }
    public function surat_keterangan_store()
    {
        $nim = $this->input->post('nim', true);
        $nama = $this->input->post('nama', true);
        $ket = $this->input->post('ket', true);
        $no = 404837;
        date_default_timezone_set('Asia/Jakarta');
        $data = array(
            'nim' => $nim,
            'nama' => $nama,
            'ket' => $ket,
            'no_surat' => $no,
            'log_date' => date('d-m-Y'),
            'log_time' => date('h:i:s:A'),
            'datereal' => date('Y-m-d'),
            'ip' => $this->input->ip_address(),
            'agen' => $this->input->user_agent(),
        );

        if ($this->db->insert('suket_mhs', $data)) {
            redirect('Mahasiswa/surat_keterangan');
        } else {
            echo 'Database insert failed';
            return;
        }
    }public function pengajuan_mutasi_kampus()
    {
        if ($this->session->userdata('role') == "mahasiswa") {
            $data['data'] = $this->db->get('klndrak')->result();
            $nim = $this->session->userdata('nim');
            $data['name'] = $this->session->userdata('name');
            $data['mhs'] = $this->db->get_where('mhs', ['nim' => $nim])->row();
            $data['mutasi'] = $this->db->get_where('pendaftaran_mutasi', ['nim' => $nim])->result();
            $this->load->view('layouts/header', $data);
            $this->load->view('layouts/sidebar', $data);
            $this->load->view('mahasiswa/pmk', $data);
            $this->load->view('layouts/footer', $data);
        } else {
            redirect('Auth/Logoutmhs');
        }
    }
    public function pengajuan_mutasi_kampus_store()
    {
        $this->load->library('upload');
        $config['upload_path'] = './assets/uploads/';
        $config['allowed_types'] = 'doc|docx|zip|rar|pdf';
        $config['max_size'] = 10072;
        $this->upload->initialize($config);

        $nim = $this->input->post('nim', true);
        $kd_lokal = $this->input->post('kd_lokal', true);
        $nm_mhs = $this->input->post('nm_mhs', true);
        $kd_paket = $this->input->post('kd_paket', true);
        $json_data = $this->input->post('pil_waktu', true);
        $data = json_decode($json_data, true);

        if ($data === null || !is_array($data)) {
            echo 'Invalid JSON data';
            return;
        }

        $telp = $this->input->post('telp', true);
        $email = $this->input->post('email', true);
        $kampus = $this->input->post('kampus', true);

        // Validasi data dari JSON
        $waktu = isset($data['waktu']) ? $data['waktu'] : null;
        $pil_waktu = isset($data['pil_waktu']) ? $data['pil_waktu'] : null;
        $kondisi = isset($data['kondisi']) ? $data['kondisi'] : null;

        $dual_d = 0;

        date_default_timezone_set('Asia/Jakarta');
        $data_insert = array(
            'nim' => $nim,
            'nm_mhs' => $nm_mhs,
            'kd_lokal' => $kd_lokal,
            'telp' => $telp,
            'email' => $email,
            'kampus' => $kampus,
            'waktu' => $waktu,
            'pil_waktu' => $pil_waktu,
            'kondisi' => $kondisi,
            'kd_paket' => $kd_paket,
            'dual_d' => $dual_d,
            'tanggal' => date('d-m-Y'),
            'jam' => date('h:i:s:A'),
            'ip' => $this->input->ip_address(),
            'agen' => $this->input->user_agent(),
        );

        // Handle file upload
        if (!$this->upload->do_upload('nama_file')) {
            if ($this->upload->display_errors() !== '<p>You did not select a file to upload.</p>') {
                $error = array('error' => $this->upload->display_errors());
                echo 'File upload failed: ' . $error['error'];
                return;
            } else {
                // No file uploaded, proceed without file
                $file_name = null;
            }
        } else {
            $file_data = $this->upload->data();
            $file_extension = pathinfo($file_data['file_name'], PATHINFO_EXTENSION);
            $new_file_name = "Pengajuan_mutasi_kampus_{$nim}." . $file_extension;
            $new_file_path = $config['upload_path'] . $new_file_name;

            // Rename the file
            if (rename($file_data['full_path'], $new_file_path)) {
                $data_insert['nama_file'] = $new_file_name;
            } else {
                echo 'Failed to rename the uploaded file.';
                return;
            }
        }

        if ($this->db->insert('pendaftaran_mutasi', $data_insert)) {
            redirect('Mahasiswa/pengajuan_mutasi_kampus');
        } else {
            echo 'Database insert failed';
            return;
        }
    }
    
    public function delete_mutasi($nim)
    {
        $this->db->where('nim', $nim);
        $mutasi = $this->db->get('pendaftaran_mutasi')->row();

        if (!$mutasi) {
            echo 'Data tidak ditemukan';
            return;
        }
        if (!empty($mutasi->nama_file)) {
            $file_path = './assets/uploads/' . $mutasi->nama_file;
            if (file_exists($file_path)) {
                unlink($file_path);
            }
        }
        $this->db->where('nim', $nim);
        if ($this->db->delete('pendaftaran_mutasi')) {
            echo 'Data berhasil dihapus';
            redirect('Mahasiswa/pengajuan_mutasi_kampus'); // Redirect ke halaman yang diinginkan
        } else {
            echo 'Gagal menghapus data';
        }
    }
	public function verifikasi_data_pribadi()
    {
        $nim = $this->session->userdata('nim');
        $data['name'] = $this->session->userdata('name');

        // Ambil data mahasiswa berdasarkan NIM
        $data['data_mhs'] = $this->db->get_where('mhs_update_pribadi_bsi_d3', ['nim' => $nim])->row();
        $data['e'] = $this->db->get_where('email_mhs', ['nim' => $nim])->row();
        $data['data_ortu'] = $this->db->get_where('mhs_ortu_update_d3', ['nim' => $nim])->row();
        $data['data_wali'] = $this->db->get_where('mhs_wali_update_d3', ['nim' => $nim])->row();

        // Ambil master yang ditampilkan
        $data['m_wilayah'] = $this->db->get('master_wilayah')->result();
        $data['m_pddk'] = $this->db->get('master_pendidikan')->result();
        $data['m_pnghsl'] = $this->db->get('master_penghasilan')->result();
        $data['m_pkj'] = $this->db->get('master_pekerjaan')->result();

        // Periksa peran pengguna
        if ($this->session->userdata('role') == "mahasiswa") {
            // Load views jika peran adalah mahasiswa
            $this->load->view('layouts/header');
            $this->load->view('layouts/sidebar');
            $this->load->view('mahasiswa/verifikasi_data_pribadi', $data);
            $this->load->view('layouts/footer');
        } else {
            // Redirect ke halaman logout jika bukan mahasiswa
            redirect('Auth/Logoutmhs');
        }
    }
    public function verifikasi_data_pribadi_update()
    {
        // Ambil nim dari input post
        $nim = $this->input->post('nim', true);

        // Konfigurasi upload file
        $this->load->library('upload');
        $config['upload_path'] = './assets/uploads/';
        $config['allowed_types'] = 'jpg';
        $config['max_size'] = 3072; // 3MB in KB

        $this->upload->initialize($config);

        $existing_record = $this->db->get_where('mhs_update_pribadi_bsi_d3', array('nim' => $nim))->row();
        $old_file_name = $existing_record->file_ktp;

        if (!$this->upload->do_upload('file_ktp')) {
            if ($this->upload->display_errors() !== '<p>You did not select a file to upload.</p>') {
                $error = array('error' => $this->upload->display_errors());
                echo 'File upload failed: ' . $error['error'];
                return;
            } else {
                // No new file uploaded, retain the old file name
                $file_name = $old_file_name;
            }
        } else {
            $file_data = $this->upload->data();
            $file_name =  $nim . ".jpg";
            $file_path = $config['upload_path'] . $file_name;
            rename($file_data['full_path'], $file_path);

            // Delete the old file if a new file is uploaded
            if (!empty($old_file_name) && file_exists('./assets/uploads/' . $old_file_name)) {
                unlink('./assets/uploads/' . $old_file_name);
            }
        }


        // Ambil nilai dari input form
        $nik = $this->input->post('nik', true);
        $nm_mhs = $this->input->post('nm_mhs', true);
        $kewarganegaraan = $this->input->post('kewarganegaraan', true);
        $penerima_kps = $this->input->post('penerima_kps', true);
        $no_kps = $this->input->post('no_kps', true);
        $alm = $this->input->post('alm', true);
        $kelurahan = $this->input->post('kelurahan', true);
        $kecamatan = $this->input->post('kecamatan', true);
        $no_rmh = $this->input->post('no_rmh', true);
        $rt = $this->input->post('rt', true);
        $rw = $this->input->post('rw', true);
        $kd_pos = $this->input->post('kd_pos', true);
        $telp = $this->input->post('telp', true);
        $no_telp_hp = $this->input->post('no_telp_hp', true);
        $emailaddress = $this->input->post('emailaddress', true);
        $nama_email = $this->input->post('nama_email', true);

        $nm_ayah = $this->input->post('nm_ayah', true);
        $nikayah = $this->input->post('nikayah', true);
        $tgl_lhr_ayah = $this->input->post('tgl_lhr_ayah', true);
        $pddk_ayah = $this->input->post('pddk_ayah', true);
        $pkj_ayh = $this->input->post('pkj_ayh', true);
        $pghsln_ayah = $this->input->post('pghsln_ayah', true);

        $nm_ibu = $this->input->post('nm_ibu', true);
        $nikibu = $this->input->post('nikibu', true);
        $tgl_lhr_ibu = $this->input->post('tgl_lhr_ibu', true);
        $pddk_ibu = $this->input->post('pddk_ibu', true);
        $pkj_ibu = $this->input->post('pkj_ibu', true);
        $pghsln_ibu = $this->input->post('pghsln_ibu', true);

        $nm_wali = $this->input->post('nm_wali', true);
        $nikwali = $this->input->post('nikwali', true);
        $tgl_lhr_wali = $this->input->post('tgl_lhr_wali', true);
        $pendidikan_wali = $this->input->post('pendidikan_wali', true);
        $pekerjaan = $this->input->post('pekerjaan', true);
        $penghasilan = $this->input->post('penghasilan', true);

        // Data untuk dimasukkan ke database
        $datamhs = array(
            'nim' => $nim,
            'nik' => $nik,
            'file_ktp' => $file_name,
            'nm_mhs' => $nm_mhs,
            'kewarganegaraan' => $kewarganegaraan,
            'penerima_kps' => $penerima_kps,
            'no_kps' => $no_kps,
            'alm' => $alm,
            'kelurahan' => $kelurahan,
            'kecamatan' => $kecamatan,
            'no_rmh' => $no_rmh,
            'rt' => $rt,
            'rw' => $rw,
            'kd_pos' => $kd_pos,
            'telp' => $telp,
            'no_telp_hp' => $no_telp_hp,
            'emailaddress' => $emailaddress,
        );

        $dataemail = array(
            'nama_email' => $nama_email,
        );

        $dataortu = array(
            'nim' => $nim,
            'nm_ayah' => $nm_ayah,
            'nikayah' => $nikayah,
            'tgl_lhr_ayah' => date('Y-m-d', strtotime($tgl_lhr_ayah)),
            'pddk_ayah' => $pddk_ayah,
            'pkj_ayh' => $pkj_ayh,
            'pghsln_ayah' => $pghsln_ayah,

            'nm_ibu' => $nm_ibu,
            'nikibu' => $nikibu,
            'tgl_lhr_ibu' => date('Y-m-d', strtotime($tgl_lhr_ibu)),
            'pddk_ibu' => $pddk_ibu,
            'pkj_ibu' => $pkj_ibu,
            'pghsln_ibu' => $pghsln_ibu,
        );

        $datawali = array(
            'nim' => $nim,
            'nm_wali' => $nm_wali,
            'nikwali' => $nikwali,
            'tgl_lhr_wali' => date('Y-m-d', strtotime($tgl_lhr_wali)),
            'pendidikan_wali' => $pendidikan_wali,
            'pekerjaan' => $pekerjaan,
            'penghasilan' => $penghasilan,
        );

        // Lakukan update data ke database
        $this->db->where('nim', $nim);
        $update_mhs = $this->db->update('mhs_update_pribadi_bsi_d3', $datamhs);

        $this->db->where('nim', $nim);
        $update_ortu = $this->db->update('mhs_ortu_update_d3', $dataortu);

        $this->db->where('nim', $nim);
        $update_email = $this->db->update('email_mhs', $dataemail);

        $this->db->where('nim', $nim);
        $update_wali = $this->db->update('mhs_wali_update_d3', $datawali);

        if ($update_mhs && $update_ortu && $update_email && $update_wali) {
            redirect('Mahasiswa');
        } else {
            echo 'Database update failed';
            return;
        }
    }
	public function daftar_sertifikasi()
    {
        $nim = $this->session->userdata('nim');
        $data['name'] = $this->session->userdata('name');

        // Periksa peran pengguna
        if ($this->session->userdata('role') == "mahasiswa") {
            // Load views jika peran adalah mahasiswa
            $this->load->view('layouts/header');
            $this->load->view('layouts/sidebar');
            $this->load->view('mahasiswa/daftar_sertifikat', $data);
            $this->load->view('layouts/footer');
        } else {
            // Redirect ke halaman logout jika bukan mahasiswa
            redirect('Auth/Logoutmhs');
        }
    }
	public function datapribadi()
{   
    $nim = $this->session->userdata('nim');
    
    // Fetch the current mahasiswa data
    $this->db->where('nim', $nim);
    $data['mhs'] = $this->db->get('mhs')->row();
    
    // Fetch agama data from master_agama table
    $this->db->select('id_agama, nm_agama');
    $agama_data = $this->db->get('master_agama')->result_array();
    $agama_map = array_column($agama_data, 'nm_agama', 'id_agama');
    
    // Translate gender
    $data['mhs']->jen_kel = $data['mhs']->jen_kel == 'L' ? 'Laki-laki' : 'Perempuan';
    
    // Translate agama using the map
    $data['mhs']->agm = isset($agama_map[$data['mhs']->agm]) ? $agama_map[$data['mhs']->agm] : 'Unknown';
    
    if ($this->session->userdata('role') == "mahasiswa") {
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('mahasiswa/data_pri_mhs', $data);
        $this->load->view('layouts/footer');
    } else {
        redirect('Auth/Logoutmhs');
    }
}

	public function mhscuti()
	{
		$data['mhs'] = $this->db->get('mhs')->row();
    if ($this->session->userdata('role')=="mahasiswa") {
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('mahasiswa/mhs_cuti', $data);
		$this->load->view('layouts/footer');
    } else {
		redirect('Auth/Logoutmhs');
	}
	
	}
	public function suratperubahanbio()
	{
		$nim = $this->session->userdata('nim');
		$this->db->where('nim', $nim);
		$data['mhs'] = $this->db->get('pengajuan_ubah_biodata')->row();
    if ($this->session->userdata('role')=="mahasiswa") {
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('mahasiswa/form_pengajuan_bio', $data);
		$this->load->view('layouts/footer');
    } else {
		redirect('Auth/Logoutmhs');
	}
	
	}

	public function nilai_uts()
    {
        $nim = $this->session->userdata('nim');
        $id = 9;
         // Fetch user name and date configuration
$data['name'] = $this->session->userdata('name');
$data['tgl'] = $this->db->get_where('konfigurasi_tanggal', ['id_tanggal' => $id])->row();

$this->db->select('mhs.*, jrskampus.nm_jrs'); // Select only the necessary columns
$this->db->from('mhs');
$this->db->join('jrskampus', 'mhs.prodi = jrskampus.kd_prodi', 'left'); // Join on kd_prodi
$this->db->where('mhs.nim', $nim); // Apply the condition to filter by 'nim'
$this->db->distinct(); // Ensure unique rows based on the selected columns

// Execute the query and get the results
$data['mhs'] = $this->db->get()->result();


    // Fetch data from 'ocruas' table for the logged-in user and join with 'kunci_uas' and 'mtk'
    $this->db->select('ocruts.*, kunci_uts.*, mtk.*'); // Select all columns from all tables
    $this->db->from('ocruts');
    $this->db->join('kunci_uts', 'ocruts.kd_ujn = kunci_uts.kd_ujn', 'left'); // Join on kd_ujn
    $this->db->join('mtk', 'ocruts.kd_mtk = mtk.kd_mtk', 'left'); // Replace some_field with the actual field used for joining
    $this->db->where('ocruts.nim', $nim);
    $data['e'] = $this->db->get()->result(); // Fetch results

    
        // Periksa peran pengguna
        if ($this->session->userdata('role') == "mahasiswa") {
            // Load views jika peran adalah mahasiswa
            $this->load->view('layouts/header');
            $this->load->view('layouts/sidebar');
            $this->load->view('mahasiswa/nilai_uts', $data);
            $this->load->view('layouts/footer');
        } else {
            // Redirect ke halaman logout jika bukan mahasiswa
            redirect('Auth/Logoutmhs');
        }
    }
	public function nilai_uas()
{
    $nim = $this->session->userdata('nim');
    $id = 10;

   // Fetch user name and date configuration
$data['name'] = $this->session->userdata('name');
$data['tgl'] = $this->db->get_where('konfigurasi_tanggal', ['id_tanggal' => $id])->row();

$this->db->select('mhs.*, jrskampus.nm_jrs'); // Select only the necessary columns
$this->db->from('mhs');
$this->db->join('jrskampus', 'mhs.prodi = jrskampus.kd_prodi', 'left'); // Join on kd_prodi
$this->db->where('mhs.nim', $nim); // Apply the condition to filter by 'nim'
$this->db->distinct(); // Ensure unique rows based on the selected columns

// Execute the query and get the results
$data['mhs'] = $this->db->get()->result();


    // Fetch data from 'ocruas' table for the logged-in user and join with 'kunci_uas' and 'mtk'
    $this->db->select('ocruas.*, kunci_uas.*, mtk.*'); // Select all columns from all tables
    $this->db->from('ocruas');
    $this->db->join('kunci_uas', 'ocruas.kd_ujn = kunci_uas.kd_ujn', 'left'); // Join on kd_ujn
    $this->db->join('mtk', 'ocruas.kd_mtk = mtk.kd_mtk', 'left'); // Replace some_field with the actual field used for joining
    $this->db->where('ocruas.nim', $nim);
    $data['e'] = $this->db->get()->result(); // Fetch results

    // Check user role
    if ($this->session->userdata('role') == "mahasiswa") {
        // Load views if role is mahasiswa
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('mahasiswa/nilai_uas', $data);
        $this->load->view('layouts/footer');
    } else {
        // Redirect to logout if not mahasiswa
        redirect('Auth/Logoutmhs');
    }
}

public function nilai_murni()
{
    $nim = $this->session->userdata('nim');
    $id = 18;
    $data['name'] = $this->session->userdata('name');
    $data['tgl'] = $this->db->get_where('konfigurasi_tanggal', ['id_tanggal' => $id])->row();

    // Select only the necessary columns
    $this->db->select('mhs.*, penilaian.*, mtk.*');
    $this->db->from('mhs');
    $this->db->join('penilaian', 'mhs.nim = penilaian.nim', 'left');
    $this->db->join('mtk', 'penilaian.kd_mtk = mtk.kd_mtk', 'left');
    $this->db->where('mhs.nim', $nim);

    // Filter by aktif column where it equals 1 (true)
    $this->db->where('penilaian.aktif', 1);

    // Execute the query and get the results
    $data['mhs'] = $this->db->get()->result();

    // Check user role and load views
    if ($this->session->userdata('role') == "mahasiswa") {
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('mahasiswa/nilai_murni', $data);
        $this->load->view('layouts/footer');
    } else {
        redirect('Auth/Logoutmhs');
    }
}




    public function nilai_murni_print()
    {
        $nim = $this->session->userdata('nim');
        $id = 18;
        $data['name'] = $this->session->userdata('name');
        $data['tgl'] = $this->db->get_where('konfigurasi_tanggal', ['id_tanggal' => $id])->row();

        $data['mhs'] = $this->db->get_where('mhs', ['nim' => $nim])->result();
        $data['print_timestamp'] = date('d-m-Y H:i:s');

         // Get course info
    $this->db->select('penilaian.*, mtk.*');
    $this->db->from('penilaian');
    $this->db->join('mtk', 'penilaian.kd_mtk = mtk.kd_mtk', 'left');
    $this->db->where('penilaian.nim', $nim);
    $data['nilai'] = $this->db->get()->result();
    
        // Periksa peran pengguna
        if ($this->session->userdata('role') == "mahasiswa") {
            // Load views jika peran adalah mahasiswa
            $this->load->view('mahasiswa/nilai_murni_print', $data);
        } else {
            // Redirect ke halaman logout jika bukan mahasiswa
            redirect('Auth/Logoutmhs');
        }
    }

    public function print_uas()
    {
        $nim = $this->session->userdata('nim');
        $id = 10;
       // Fetch user name and date configuration
$data['name'] = $this->session->userdata('name');
$data['tgl'] = $this->db->get_where('konfigurasi_tanggal', ['id_tanggal' => $id])->row();

$this->db->select('mhs.*, jrskampus.nm_jrs'); // Select only the necessary columns
$this->db->from('mhs');
$this->db->join('jrskampus', 'mhs.prodi = jrskampus.kd_prodi', 'left'); // Join on kd_prodi
$this->db->where('mhs.nim', $nim); // Apply the condition to filter by 'nim'
$this->db->distinct(); // Ensure unique rows based on the selected columns

// Execute the query and get the results
$data['mhs'] = $this->db->get()->result();


    // Fetch data from 'ocruas' table for the logged-in user and join with 'kunci_uas' and 'mtk'
    $this->db->select('ocruas.*, kunci_uas.*, mtk.*'); // Select all columns from all tables
    $this->db->from('ocruas');
    $this->db->join('kunci_uas', 'ocruas.kd_ujn = kunci_uas.kd_ujn', 'left'); // Join on kd_ujn
    $this->db->join('mtk', 'ocruas.kd_mtk = mtk.kd_mtk', 'left'); // Replace some_field with the actual field used for joining
    $this->db->where('ocruas.nim', $nim);
    $data['e'] = $this->db->get()->result(); // Fetch results
        // Periksa peran pengguna
        if ($this->session->userdata('role') == "mahasiswa") {
            // Load views jika peran adalah mahasiswa
         
            $this->load->view('mahasiswa/print_uas', $data);
           
        } else {
            // Redirect ke halaman logout jika bukan mahasiswa
            redirect('Auth/Logoutmhs');
        }
    }

    public function print_uts()
    {
        $nim = $this->session->userdata('nim');
        $id = 9;
       // Fetch user name and date configuration
$data['name'] = $this->session->userdata('name');
$data['tgl'] = $this->db->get_where('konfigurasi_tanggal', ['id_tanggal' => $id])->row();

$this->db->select('mhs.*, jrskampus.nm_jrs'); // Select only the necessary columns
$this->db->from('mhs');
$this->db->join('jrskampus', 'mhs.prodi = jrskampus.kd_prodi', 'left'); // Join on kd_prodi
$this->db->where('mhs.nim', $nim); // Apply the condition to filter by 'nim'
$this->db->distinct(); // Ensure unique rows based on the selected columns

// Execute the query and get the results
$data['mhs'] = $this->db->get()->result();


    // Fetch data from 'ocruas' table for the logged-in user and join with 'kunci_uas' and 'mtk'
    $this->db->select('ocruts.*, kunci_uts.*, mtk.*'); // Select all columns from all tables
    $this->db->from('ocruts');
    $this->db->join('kunci_uts', 'ocruts.kd_ujn = kunci_uts.kd_ujn', 'left'); // Join on kd_ujn
    $this->db->join('mtk', 'ocruts.kd_mtk = mtk.kd_mtk', 'left'); // Replace some_field with the actual field used for joining
    $this->db->where('ocruts.nim', $nim);
    $data['e'] = $this->db->get()->result(); // Fetch results
        // Periksa peran pengguna
        if ($this->session->userdata('role') == "mahasiswa") {
            // Load views jika peran adalah mahasiswa
         
            $this->load->view('mahasiswa/print_uts', $data);
           
        } else {
            // Redirect ke halaman logout jika bukan mahasiswa
            redirect('Auth/Logoutmhs');
        }
    }

	public function nilai_her()
    {
        $nim = $this->session->userdata('nim');
        $id = 18;
        $data['name'] = $this->session->userdata('name');
        $data['tgl'] = $this->db->get_where('konfigurasi_tanggal', ['id_tanggal' => $id])->row();
    
        // Periksa peran pengguna
        if ($this->session->userdata('role') == "mahasiswa") {
            // Load views jika peran adalah mahasiswa
            $this->load->view('layouts/header');
            $this->load->view('layouts/sidebar');
            $this->load->view('mahasiswa/nilai_her', $data);
            $this->load->view('layouts/footer');
        } else {
            // Redirect ke halaman logout jika bukan mahasiswa
            redirect('Auth/Logoutmhs');
        }
    }
	public function khs()
    {
        $nim = $this->session->userdata('nim');
        $id = 12;
        $data['name'] = $this->session->userdata('name');
        $data['tgl'] = $this->db->get_where('konfigurasi_tanggal', ['id_tanggal' => $id])->row();

        // Fetch penilaian data
        $penilaian_nim = $this->db->get_where('penilaian', ['nim' => $nim])->result();

        $penilaian_data = [];
        foreach ($penilaian_nim as $penilaian) {
            $mtk = $this->db->get_where('mtk', ['kd_mtk' => $penilaian->kd_mtk])->row();
            if ($mtk) {
                $nilai = 0;
                switch ($penilaian->grade_akhir) {
                    case 'A':
                        $nilai = 4;
                        break;
                    case 'B':
                        $nilai = 3;
                        break;
                    case 'C':
                        $nilai = 2;
                        break;
                    case 'D':
                        $nilai = 1;
                        break;
                    case 'E':
                        $nilai = 0;
                        break;
                }
                $mutu = $mtk->sks * $nilai;
                $penilaian_data[] = [
                    'kd_mtk' => $penilaian->kd_mtk,
                    'nm_mtk' => $mtk->nm_mtk,
                    'sks' => $mtk->sks,
                    'grade_akhir' => $penilaian->grade_akhir,
                    'nmutu' => $mutu,
                ];
            }
        }
        $data['penilaian_nim'] = $penilaian_data;

        // Fetch student data from 'mhs' table
        $this->db->select('nim, nm_mhs, kd_lokal, kd_jrs, kd_kampus');
        $this->db->from('mhs');
        $this->db->where('nim', $nim);
        $query = $this->db->get();
        $student = $query->row_array();

        if ($student) {
            // Fetch program study data from 'jrskampus' table
            $this->db->select('nm_jrs');
            $this->db->from('jrskampus');
            $this->db->where('kd_jrs', $student['kd_jrs']);
            $this->db->where('kd_cab', $student['kd_kampus']);
            $query = $this->db->get();
            $program_study = $query->row_array();

            if ($program_study) {
                $student['nm_jrs'] = $program_study['nm_jrs'];
            } else {
                $student['nm_jrs'] = 'Unknown';
            }

            // Calculate total mutu and SKS
            $totalMutu = 0;
            $totalSKS = 0;
            foreach ($penilaian_data as $penilaian) {
                $totalMutu += $penilaian['nmutu'];
                $totalSKS += $penilaian['sks'];
            }

            // Calculate IPK
            $ipk = ($totalSKS != 0) ? $totalMutu / $totalSKS : 0;

            $data['student'] = $student;
            $data['totalMutu'] = $totalMutu;
            $data['totalSKS'] = $totalSKS;
            $data['ipk'] = number_format($ipk, 2);

            // Check user role and load views
            if ($this->session->userdata('role') == "mahasiswa") {
                $this->load->view('layouts/header');
                $this->load->view('layouts/sidebar');
                $this->load->view('mahasiswa/khs', $data);
                $this->load->view('layouts/footer');
            } else {
                redirect('Auth/Logoutmhs');
            }
        } else {
            show_404();
        }
    }
	public function khs_print()
    {
        $nim = $this->session->userdata('nim');
        $id = 12;
        $data['name'] = $this->session->userdata('name');
        $data['tgl'] = $this->db->get_where('konfigurasi_tanggal', ['id_tanggal' => $id])->row();

        // Fetch penilaian data
        $penilaian_nim = $this->db->get_where('penilaian', ['nim' => $nim])->result();

        $penilaian_data = [];
        foreach ($penilaian_nim as $penilaian) {
            $mtk = $this->db->get_where('mtk', ['kd_mtk' => $penilaian->kd_mtk])->row();
            if ($mtk) {
                $nilai = 0;
                switch ($penilaian->grade_akhir) {
                    case 'A':
                        $nilai = 4;
                        break;
                    case 'B':
                        $nilai = 3;
                        break;
                    case 'C':
                        $nilai = 2;
                        break;
                    case 'D':
                        $nilai = 1;
                        break;
                    case 'E':
                        $nilai = 0;
                        break;
                }
                $mutu = $mtk->sks * $nilai;
                $penilaian_data[] = [
                    'kd_mtk' => $penilaian->kd_mtk,
                    'nm_mtk' => $mtk->nm_mtk,
                    'sks' => $mtk->sks,
                    'grade_akhir' => $penilaian->grade_akhir,
                    'nmutu' => $mutu,
                ];
            }
        }
        $data['penilaian_nim'] = $penilaian_data;

        // Fetch student data from 'mhs' table
        $this->db->select('nim, nm_mhs, kd_lokal, kd_jrs, kd_kampus');
        $this->db->from('mhs');
        $this->db->where('nim', $nim);
        $query = $this->db->get();
        $student = $query->row_array();

        if ($student) {
            // Fetch program study data from 'jrskampus' table
            $this->db->select('nm_jrs');
            $this->db->from('jrskampus');
            $this->db->where('kd_jrs', $student['kd_jrs']);
            $this->db->where('kd_cab', $student['kd_kampus']);
            $query = $this->db->get();
            $program_study = $query->row_array();

            if ($program_study) {
                $student['nm_jrs'] = $program_study['nm_jrs'];
            } else {
                $student['nm_jrs'] = 'Unknown';
            }

            // Calculate total mutu and SKS
            $totalMutu = 0;
            $totalSKS = 0;
            foreach ($penilaian_data as $penilaian) {
                $totalMutu += $penilaian['nmutu'];
                $totalSKS += $penilaian['sks'];
            }

            // Calculate IPK
            $ipk = ($totalSKS != 0) ? $totalMutu / $totalSKS : 0;

            $data['student'] = $student;
            $data['totalMutu'] = $totalMutu;
            $data['totalSKS'] = $totalSKS;
            $data['ipk'] = number_format($ipk, 2);

            // Check user role and load views
            if ($this->session->userdata('role') == "mahasiswa") {
                $this->load->view('mahasiswa/khs_print', $data);
            } else {
                redirect('Auth/Logoutmhs');
            }
        } else {
            show_404();
        }
    }
	public function khs_semester()
    {
        $nim = $this->session->userdata('nim');
    $id = 12;
    $data['name'] = $this->session->userdata('name');
    $data['tgl'] = $this->db->get_where('konfigurasi_tanggal', ['id_tanggal' => $id])->row();

    // Initialize an array to hold data for each semester
    $penilaian_data_by_semester = [];

    // Loop through each semester (1 to 8) and fetch data
    for ($semester = 1; $semester <= 8; $semester++) {
        // Fetch penilaian data with semester filter
        $this->db->select('penilaian.*, mtk.nm_mtk, mtk.sks');
        $this->db->from('penilaian');
        $this->db->join('mtk', 'penilaian.kd_mtk = mtk.kd_mtk', 'left');
        $this->db->where('penilaian.nim', $nim);

        // Filter by semester using SQL string functions
        $this->db->where("SUBSTRING_INDEX(SUBSTRING_INDEX(penilaian.no_krs, '.', 2), '.', -1) = ", $semester);

        $penilaian_nim = $this->db->get()->result();

        $penilaian_data = [];
        foreach ($penilaian_nim as $penilaian) {
            $nilai = 0;
            switch ($penilaian->grade_akhir) {
                case 'A':
                    $nilai = 4;
                    break;
                case 'B':
                    $nilai = 3;
                    break;
                case 'C':
                    $nilai = 2;
                    break;
                case 'D':
                    $nilai = 1;
                    break;
                case 'E':
                    $nilai = 0;
                    break;
            }
            $mutu = $penilaian->sks * $nilai;
            $penilaian_data[] = [
                'kd_mtk' => $penilaian->kd_mtk,
                'nm_mtk' => $penilaian->nm_mtk,
                'sks' => $penilaian->sks,
                'grade_akhir' => $penilaian->grade_akhir,
                'nmutu' => $mutu,
            ];
        }

        // Store the data in the corresponding semester array
        $penilaian_data_by_semester[$semester] = $penilaian_data;
    }

    // Fetch student data from 'mhs' table
    $this->db->select('nim, nm_mhs, kd_lokal, kd_jrs, kd_kampus');
    $this->db->from('mhs');
    $this->db->where('nim', $nim);
    $query = $this->db->get();
    $student = $query->row_array();

    if ($student) {
        // Fetch program study data from 'jrskampus' table
        $this->db->select('nm_jrs');
        $this->db->from('jrskampus');
        $this->db->where('kd_jrs', $student['kd_jrs']);
        $this->db->where('kd_cab', $student['kd_kampus']);
        $query = $this->db->get();
        $program_study = $query->row_array();

        if ($program_study) {
            $student['nm_jrs'] = $program_study['nm_jrs'];
        } else {
            $student['nm_jrs'] = 'Unknown';
        }

        $data['student'] = $student;

        // Loop through each semester to calculate total Mutu, SKS, and IPK
        for ($semester = 1; $semester <= 8; $semester++) {
            $totalMutu = 0;
            $totalSKS = 0;

            foreach ($penilaian_data_by_semester[$semester] as $penilaian) {
                $totalMutu += $penilaian['nmutu'];
                $totalSKS += $penilaian['sks'];
            }

            // Calculate IPK
            $ipk = ($totalSKS != 0) ? $totalMutu / $totalSKS : 0;

            // Store the totals and IPK in the data array for each semester
            $data['totalMutu' . $semester] = $totalMutu;
            $data['totalSKS' . $semester] = $totalSKS;
            $data['ipk' . $semester] = number_format($ipk, 2);
        }

        // Pass the data to the view
        $data['penilaian_data_by_semester'] = $penilaian_data_by_semester;

        // Check user role and load views
        if ($this->session->userdata('role') == "mahasiswa") {
            $this->load->view('layouts/header');
            $this->load->view('layouts/sidebar');
            $this->load->view('mahasiswa/khs_semester', $data);
            $this->load->view('layouts/footer');
        } else {
            redirect('Auth/Logoutmhs');
        }
    } else {
        show_404();
    }
}

	public function khs_semester_print() 
{
    $nim = $this->session->userdata('nim');
    $id = 12;
    $semester = $this->input->get('semester');
    $data['name'] = $this->session->userdata('name');
    $data['tgl'] = $this->db->get_where('konfigurasi_tanggal', ['id_tanggal' => $id])->row();

    // Fetch penilaian data with semester filter
    $this->db->select('penilaian.*, mtk.nm_mtk, mtk.sks');
    $this->db->from('penilaian');
    $this->db->join('mtk', 'penilaian.kd_mtk = mtk.kd_mtk', 'left');
    $this->db->where('penilaian.nim', $nim);

    // Filter by semester using SQL string functions
    $this->db->where("SUBSTRING_INDEX(SUBSTRING_INDEX(penilaian.no_krs, '.', 2), '.', -1) = ", $semester);

    $penilaian_nim = $this->db->get()->result();

    $penilaian_data = [];
    foreach ($penilaian_nim as $penilaian) {
        $nilai = 0;
        switch ($penilaian->grade_akhir) {
            case 'A':
                $nilai = 4;
                break;
            case 'B':
                $nilai = 3;
                break;
            case 'C':
                $nilai = 2;
                break;
            case 'D':
                $nilai = 1;
                break;
            case 'E':
                $nilai = 0;
                break;
        }
        $mutu = $penilaian->sks * $nilai;
        $penilaian_data[] = [
            'kd_mtk' => $penilaian->kd_mtk,
            'nm_mtk' => $penilaian->nm_mtk,
            'sks' => $penilaian->sks,
            'grade_akhir' => $penilaian->grade_akhir,
            'nmutu' => $mutu,
        ];
    }
    $data['penilaian_nim'] = $penilaian_data;

    // Fetch student data from 'mhs' table
    $this->db->select('nim, nm_mhs, kd_lokal, kd_jrs, kd_kampus');
    $this->db->from('mhs');
    $this->db->where('nim', $nim);
    $query = $this->db->get();
    $student = $query->row_array();

    if ($student) {
        // Fetch program study data from 'jrskampus' table
        $this->db->select('nm_jrs');
        $this->db->from('jrskampus');
        $this->db->where('kd_jrs', $student['kd_jrs']);
        $this->db->where('kd_cab', $student['kd_kampus']);
        $query = $this->db->get();
        $program_study = $query->row_array();

        if ($program_study) {
            $student['nm_jrs'] = $program_study['nm_jrs'];
        } else {
            $student['nm_jrs'] = 'Unknown';
        }

        // Calculate total mutu and SKS
        $totalMutu = 0;
        $totalSKS = 0;
        foreach ($penilaian_data as $penilaian) {
            $totalMutu += $penilaian['nmutu'];
            $totalSKS += $penilaian['sks'];
        }

        // Calculate IPK
        $ipk = ($totalSKS != 0) ? $totalMutu / $totalSKS : 0;

        $data['student'] = $student;
        $data['totalMutu'] = $totalMutu;
        $data['totalSKS'] = $totalSKS;
        $data['ipk'] = number_format($ipk, 2);

        // Check user role and load views
        if ($this->session->userdata('role') == "mahasiswa") {
           
            $this->load->view('mahasiswa/khs_semester_print', $data);
          
        } else {
            redirect('Auth/Logoutmhs');
        }
    } else {
        show_404();
    }
}

	public function suratbio()
{
    $this->load->library('upload');
    $this->load->library('email');
    $data['mhs'] = $this->db->get('mhs')->row();

    $config['upload_path'] = './assets/uploads/surat/suratbio';
    $config['allowed_types'] = 'pdf';
    $config['max_size'] = 2048; // 2MB limit
    
    $this->upload->initialize($config);

    $email = $this->input->post('email', true);
    $telp = $this->input->post('telp', true);

    $documents = [
        'surat_pengajuan' => 'Surat Pengajuan Perubahan Biodata',
        'ktp' => 'ktp',
        'kk' => 'kk',
        'akte_lahir' => 'akte_lahir',
        'ktm' => 'ktm',
        'ijasah' => 'Ijasah',
        'transkip' => 'transkip'
    ];

    $uploaded_files = [];
    $upload_errors = [];
    
    foreach ($documents as $key => $docName) {
        if (!empty($_FILES[$key]['name'])) {
            if (!$this->upload->do_upload($key)) {
                $upload_errors[$key] = $this->upload->display_errors('', '');
            } else {
                $file_data = $this->upload->data();
                $new_file_name = $key . '_' . $this->session->userdata('nim') . '_' . '17_4A_05'. '_' . uniqid() . $file_data['file_ext'];
                $new_file_path = $config['upload_path'] . '/' . $new_file_name;
                rename($file_data['full_path'], $new_file_path);
                $uploaded_files[$key] = $new_file_path; // Store the full path for email attachment
            }
        }
    }

    if (!empty($upload_errors)) {
        $error_msg = 'Some files failed to upload: ' . implode(', ', $upload_errors);
        $this->session->set_flashdata('errors', $error_msg);
        redirect('mahasiswa');
        return;
    }
    
    date_default_timezone_set('Asia/Jakarta');
    $data = array(
        'nim' => $this->session->userdata('nim'),
        'email' => $email,
        'telp' => $telp,
        'tanggal' => date('d-m-Y'),
        'jam' => date('h:i:s:A'),
        'ip' => $this->input->ip_address(),
        'agen' => $this->input->user_agent(),
    );

    // Email configuration
    $from_email = 'ruangmahasiswatest@test.com';
    $from_name = 'Ruang Mahasiswa';
    $to_email = 'target@gmail.com'; // Ganti dengan email tujuan
    $subject = 'Permintaan Pergantian Data';
    $message = '
        <p>Yth. Penerima,</p>
        <p>Dengan hormat,</p>
        <p>Kami mengajukan permintaan untuk melakukan pergantian data pada sistem kami. 
        Berikut adalah detail data yang perlu diganti:</p>
        <ul>
            <li>Data Lama: [Data Lama]</li>
            <li>Data Baru: [Ada Di Lampiran]</li>
        </ul>
        <p>Demikian permintaan ini kami ajukan. Terima kasih atas perhatian dan kerjasamanya.</p>
        <p>Hormat kami,</p>
        <p>Ruang Mahasiswa</p>
    ';

    $this->email->from($from_email, $from_name);
    $this->email->to($to_email);
    $this->email->subject($subject);
    $this->email->message($message);

    // Attach files
    foreach ($uploaded_files as $file_path) {
        $this->email->attach($file_path);
    }

    $this->email->send();

    // Merge uploaded file names into data array
    $data = array_merge($data, array_map('basename', $uploaded_files)); // Store only file names in DB

    if ($this->db->insert('pengajuan_ubah_biodata', $data)) {
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                        <strong>berhasil!</strong> sedang mengajukan pengajuan perubahan biodata.
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                            aria-label="Close"><i class="bi bi-x"></i></button>
                                                        </div>');
        redirect('mahasiswa/suratperubahanbio');
    } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                        <strong>gagal!</strong> melakukan mengajukan pengajuan perubahan biodata.
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                            aria-label="Close"><i class="bi bi-x"></i></button>
                                                        </div>');
        redirect('mahasiswa/suratperubahanbio');
    }
}



}
