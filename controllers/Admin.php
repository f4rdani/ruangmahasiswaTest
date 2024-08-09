

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
	public function dashboard()
	{
		if ($this->session->userdata('role')=="admin") {
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('layouts/footer');
	} else {
		redirect('Auth/Logoutmhs');
	}
	}

	public function pengumuman()
	{
		if ($this->session->userdata('role')=="admin") {
		$data['data'] = $this->db->get('info_luar')->result();
		$data['dat'] = $this->db->get('pengumuman')->result();
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('admin/pengumuman', $data);
		$this->load->view('layouts/footer', $data);
	} else {
		redirect('Auth/Logoutmhs');
	}
	}
	public function cfgtgl()
	{
		if ($this->session->userdata('role')=="admin") {
		$data['data'] = $this->db->get('konfigurasi_tanggal')->result();
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('admin/configtanggal', $data);
		$this->load->view('layouts/footer', $data);
	} else {
		redirect('Auth/Logoutmhs');
	}
	}
	public function infomhs()
	{
		if ($this->session->userdata('role')=="admin") {
		$data['data'] = $this->db->get('berita_index_mhs')->result();
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('admin/infomhs', $data);
		$this->load->view('layouts/footer', $data);
	} else {
		redirect('Auth/Logoutmhs');
	}
	}
	public function filedo()
	{
		if ($this->session->userdata('role')=="admin") {
		$data['data'] = $this->db->get('sk_do_file')->result();
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('admin/infodo', $data);
		$this->load->view('layouts/footer', $data);
	} else {
		redirect('Auth/Logoutmhs');
	}
	}
	public function klndrak()
	{
		if ($this->session->userdata('role')=="admin") {
		$data['data'] = $this->db->get('klndrak')->result();
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('admin/klnderak', $data);
		$this->load->view('layouts/footer', $data);
	} else {
		redirect('Auth/Logoutmhs');
	}
	}
	public function imhs()
	{
		if ($this->session->userdata('role')=="admin") {
		$data['data'] = $this->db->get('mhsregs')->result();
		$data['da'] = $this->db->get('sk_surat_do')->result();
		$data['d'] = $this->db->get('penggantian_nim')->result();
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('admin/imhs', $data);
		$this->load->view('layouts/footer', $data);
	} else {
		redirect('Auth/Logoutmhs');
	}
	}
	public function info_data_pribadi($nim)
    {
		$this->db->select('nm_mhs');
		$this->db->where('nim', $nim);
		$query = $this->db->get('mhsregs');
		$data['name'] = $query->row()->nm_mhs;

        // Ambil data mahasiswa berdasarkan NIM
        $data['data_mhs'] = $this->db->get_where('mhs_update_pribadi_bsi_d3', ['nim' => $nim])->row();
		$data['data_ortu'] = $this->db->get_where('mhs_ortu_update_d3', ['nim' => $nim])->row();
		$data['data_wali'] = $this->db->get_where('mhs_wali_update_d3', ['nim' => $nim])->row();

        // Ambil master yang ditampilkan
        $data['m_wilayah'] = $this->db->get('master_wilayah')->result();
		$data['m_pddk'] = $this->db->get('master_pendidikan')->result();
		$data['m_pnghsl'] = $this->db->get('master_penghasilan')->result();
		$data['m_pkj'] = $this->db->get('master_pekerjaan')->result();

        // Periksa peran pengguna
        if ($this->session->userdata('role') == "admin") {
            // Load views jika peran adalah mahasiswa
            $this->load->view('layouts/header');
            $this->load->view('layouts/sidebar');
            $this->load->view('admin/info_data_pribadi', $data);
            $this->load->view('layouts/footer');
        } else {
            // Redirect ke halaman logout jika bukan mahasiswa
            redirect('Auth/Logoutmhs');
        }
    }
	public function datapribadi($nim)
	{
		$this->db->select('nm_mhs');
		$this->db->where('nim', $nim);
		$query = $this->db->get('mhsregs');
		$data['name'] = $query->row()->nm_mhs;

		$data['mhs'] = $this->db->get_where('mhs', ['nim' => $nim])->row();
		
		$mhs = $this->db->get_where('mhs', ['nim' => $nim])->row();
		$agm_id = $mhs->agm; 
		$this->db->where('id_agama', $agm_id);
		$data['agm'] = $this->db->get('master_agama')->row();
		
    if ($this->session->userdata('role')=="admin") {
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('admin/datapribadimhs', $data);
		$this->load->view('layouts/footer');
    } else {
		redirect('Auth/Logoutmhs');
	}
	}
	public function mastertable()
	{
		if ($this->session->userdata('role')=="admin") {
		$data['agama'] = $this->db->get('master_agama')->result();
		$data['jd'] = $this->db->get('master_jalur_daftar')->result();
		$data['jnsd'] = $this->db->get('master_jenis_daftar')->result();
		$data['kk'] = $this->db->get('master_kebutuhan_khusus')->result();
		$data['negara'] = $this->db->get('master_negara')->result();
		$data['mp'] = $this->db->get('master_pekerjaan')->result();
		$data['mpbyn'] = $this->db->get('master_pembiayaan')->result();
		$data['mpdn'] = $this->db->get('master_pendidikan')->result();
		$data['mphn'] = $this->db->get('master_penghasilan')->result();
		$data['mtt'] = $this->db->get('master_tempat_tinggal')->result();
		$data['mtns'] = $this->db->get('master_transportasi')->result();
		$data['mwly'] = $this->db->get('master_wilayah')->result();
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar', $data);
		$this->load->view('admin/mastertable', $data);
		$this->load->view('layouts/footer', $data);
	} else {
		redirect('Auth/Logoutmhs');
	}
	}
// =============================================================
	public function store()
	{
		if ($this->session->userdata('role')) {
			$this->load->library('upload');

			$config['upload_path'] = './assets/uploads/';
			$config['allowed_types'] = 'pdf';
			$config['max_size'] = 10000;

			$this->upload->initialize($config);

			$judul = $this->input->post('judul', true);
			$user_upload = $this->session->userdata('nim');

			if (!$this->upload->do_upload('file')) {
				$error = array('error' => $this->upload->display_errors());
				echo 'File upload failed: ' . $error['error'];
				return;
			} else {
				$file_data = $this->upload->data();
				$file_name = 'pdpn_' . $user_upload . '_' . uniqid() . $file_data["file_ext"];
				$file_path = $config['upload_path'] . $file_name;
				rename($file_data['full_path'], $file_path);
			}

			$data = array(
				'judul' => $judul,
				'user_upload' => $user_upload,
				'file' => $file_name
			);

			if ($this->db->insert('info_luar', $data)) {
				redirect('admin/pengumuman');
			} else {
				echo 'Database insert failed';
				return;
			}
		} else {
			redirect('auth');
		}
	}

	public function storejln()
	{
		if ($this->session->userdata('role')) {

			$judul = $this->input->post('judul', true);
			$isi = $this->input->post('isi_pengumuman', true);
			$user_upload = $this->session->userdata('nim');

			$data = array(
				'judul' => $judul,
				'isi_pengumuman' => $isi,
				'petugas' => $user_upload,
			);

			if ($this->db->insert('pengumuman', $data)) {
				redirect('admin/pengumuman');
			} else {
				echo 'Database insert failed';
				return;
			}
		} else {
			redirect('auth');
		}
	}
	public function hapuspostjln($id)
	{
		$post = $this->db->get_where('pengumuman', array('id_pengumuman' => $id))->row();

		$this->db->where('id_pengumuman', $id);
		$this->db->delete('pengumuman');

		redirect('admin/pengumuman');
	}

	public function editjln($id)
	{
		if ($this->session->userdata('role')) {

			$judul = $this->input->post('judul', true);
			$isi = $this->input->post('isi_pengumuman', true);
			$user_upload = $this->session->userdata('nim');

			$data = array(
				'judul' => $judul,
				'isi_pengumuman' => $isi,
				'petugas' => $user_upload,
			);

			$this->db->where('id_pengumuman', $id);
			if ($this->db->update('pengumuman', $data)) {
				redirect('admin/pengumuman');
			} else {
				echo 'Database update failed';
				return;
			}
		} else {
			redirect('auth');
		}
	}

	public function hapuspost($id)
	{
		$post = $this->db->get_where('info_luar', array('id' => $id))->row();

		if (!empty($post->file)) {
			$file_path = './assets/uploads/' . $post->file;
			if (file_exists($file_path)) {
				unlink($file_path);
			}
		}

		$this->db->where('id', $id);
		$this->db->delete('info_luar');

		redirect('admin/pengumuman');
	}

	public function edit($id)
	{
		if ($this->session->userdata('role')) {
			$this->load->library('upload');

			$config['upload_path'] = './assets/uploads/';
			$config['allowed_types'] = 'pdf';
			$config['max_size'] = 10000;

			$this->upload->initialize($config);

			$judul = $this->input->post('judul', true);
			$user_upload = $this->session->userdata('nim');

			// Fetch the existing record to get the old file name
			$existing_record = $this->db->get_where('info_luar', array('id' => $id))->row();
			$old_file_name = $existing_record->file;

			if (!$this->upload->do_upload('file')) {
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
				$file_name = 'pdpn_' . $user_upload . '_' . uniqid() . $file_data["file_ext"];
				$file_path = $config['upload_path'] . $file_name;
				rename($file_data['full_path'], $file_path);

				// Delete the old file if a new file is uploaded
				if (!empty($old_file_name) && file_exists('./assets/uploads/' . $old_file_name)) {
					unlink('./assets/uploads/' . $old_file_name);
				}
			}

			$data = array(
				'judul' => $judul,
				'user_upload' => $user_upload,
				'file' => $file_name
			);

			$this->db->where('id', $id);
			if ($this->db->update('info_luar', $data)) {
				redirect('admin/pengumuman');
			} else {
				echo 'Database update failed';
				return;
			}
		} else {
			redirect('auth');
		}
	}
	public function viewFile($encoded_file_name) {
		$file_name = urldecode($encoded_file_name);
		$data['file_name'] = $file_name;
		$this->load->view('view_file', $data);
	}
	
	public function store1()
	{
		if ($this->session->userdata('role')== 'admin') {
			$this->load->library('upload');

			$config['upload_path'] = './assets/uploads/';
			$config['allowed_types'] = 'pdf';
			$config['max_size'] = 10000;

			$this->upload->initialize($config);

			$judul = $this->input->post('judul', true);
			$story = $this->input->post('story', true);
			$date = $this->input->post('date', true);
			$show = $this->input->post('show', true);
			$user_upload = $this->session->userdata('nim');
			if($show === null){
				$show = 0;
			}

			if (!$this->upload->do_upload('file')) {
				$error = array('error' => $this->upload->display_errors());
				echo 'File upload failed: ' . $error['error'];
				return;
			} else {
				$file_data = $this->upload->data();
				$file_name = 'pmhs_' . $user_upload . '_' . uniqid() . $file_data["file_ext"];
				$file_path = $config['upload_path'] . $file_name;
				rename($file_data['full_path'], $file_path);
			}

			$data = array(
				'Announce_title' => $judul,
				'Announce_story' => $story,
				'Announce_date' => $date,
				'showed' => $show,
				'nip' => $user_upload,
				'file_pisik' => $file_name
			);

			if ($this->db->insert('berita_index_mhs', $data)) {
				redirect('admin/infomhs');
			} else {
				echo 'Database insert failed';
				return;
			}
		} else {
			redirect('auth');
		}
	}
	public function hapusindexmhs($id)
	{
		$post = $this->db->get_where('info_luar', array('id' => $id))->row();

		if (!empty($post->file_pisik)) {
			$file_path = './assets/uploads/' . $post->file_pisik;
			if (file_exists($file_path)) {
				unlink($file_path);
			}
		}

		$this->db->where('id', $id);
		$this->db->delete('berita_index_mhs');

		redirect('admin/infomhs');
	}

	public function editindexmhs($id)
	{
		if ($this->session->userdata('role')) {
			$this->load->library('upload');

			$config['upload_path'] = './assets/uploads/';
			$config['allowed_types'] = 'pdf';
			$config['max_size'] = 10000;

			$this->upload->initialize($config);

			$judul = $this->input->post('judul', true);
			$story = $this->input->post('story', true);
			$date = $this->input->post('date', true);
			$show = $this->input->post('show', true);
			$user_upload = $this->session->userdata('nim');
			if($show === null){
				$show = 0;
			}
			// Fetch the existing record to get the old file name
			$existing_record = $this->db->get_where('berita_index_mhs', array('id' => $id))->row();
			$old_file_name = $existing_record->file_pisik;

			if (!$this->upload->do_upload('file')) {
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
				$file_name = 'pdpn_' . $user_upload . '_' . uniqid() . $file_data["file_ext"];
				$file_path = $config['upload_path'] . $file_name;
				rename($file_data['full_path'], $file_path);

				// Delete the old file if a new file is uploaded
				if (!empty($old_file_name) && file_exists('./assets/uploads/' . $old_file_name)) {
					unlink('./assets/uploads/' . $old_file_name);
				}
			}

			$data = array(
				'Announce_title' => $judul,
				'Announce_story' => $story,
				'Announce_date' => $date,
				'nip' => $user_upload,
				'showed' => $show,
				'file_pisik' => $file_name
			);

			$this->db->where('id', $id);
			if ($this->db->update('berita_index_mhs', $data)) {
				redirect('admin/infomhs');
			} else {
				echo 'Database update failed';
				return;
			}
		} else {
			redirect('auth');
		}
	}
	public function savecfgtgl()
	{
		if ($this->session->userdata('role')== 'admin') {

			$program = $this->input->post('keterangan', true);
			$keterangan = $this->input->post('keterangan', true);
			$pembukaan = $this->input->post('pembukaan', true);
			$penutupan = $this->input->post('penutupan', true);
			$petugas = $this->session->userdata('name');
			date_default_timezone_set('Asia/Jakarta');
			$pembukaan_datetime = new DateTime($pembukaan);
			$penutupan_datetime = new DateTime($penutupan);

			$tanggal_update = date('d-m-Y');
			$jam_update = date('h:i:s:A');

			$data = array(
				'nama_program' => $program,
				'tgl_buka' => $pembukaan_datetime->format('d'),
				'bln_buka' => $pembukaan_datetime->format('F'),
				'thn_buka' => $pembukaan_datetime->format('Y'),
				'jam_buka' => $pembukaan_datetime->format('H'),
				'menit_buka' => $pembukaan_datetime->format('i'),
				'detik_buka' => $pembukaan_datetime->format('s'),
				'tgl_tutup' => $penutupan_datetime->format('d'),
				'bln_tutup' => $penutupan_datetime->format('F'),
				'thn_tutup' => $penutupan_datetime->format('Y'),
				'jam_tutup' => $penutupan_datetime->format('H'),
				'menit_tutup' => $penutupan_datetime->format('i'),
				'detik_tutup' => $penutupan_datetime->format('s'),
				'keterangan' => $keterangan,
				'tanggal_update' => $tanggal_update,
    			'jam_update' => $jam_update,
				'petugas' => $petugas
			);

			if ($this->db->insert('konfigurasi_tanggal', $data)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
															<strong>berhasil!</strong> data berhasil ditambahkan.
															<button type="button" class="btn-close" data-bs-dismiss="alert"
																aria-label="Close"><i class="bi bi-x"></i></button>
															</div>');
				redirect('admin/cfgtgl');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
															<strong>gagal!</strong> data gagal ditambahkan.
															<button type="button" class="btn-close" data-bs-dismiss="alert"
																aria-label="Close"><i class="bi bi-x"></i></button>
															</div>');
				redirect('admin/cfgtgl');
			}
		} else {
			redirect('auth');
		}
	}
	public function updatecfgtgl($id)
	{
		if ($this->session->userdata('role')== 'admin') {

			$program = $this->input->post('program', true);
			$keterangan = $this->input->post('keterangan', true);
			$pembukaan = $this->input->post('pembukaan', true);
			$penutupan = $this->input->post('penutupan', true);
			$petugas = $this->session->userdata('name');

			$pembukaan_datetime = new DateTime($pembukaan);
			$penutupan_datetime = new DateTime($penutupan);
			date_default_timezone_set('Asia/Jakarta');
			$tanggal_update = date('d-m-Y');
			$jam_update = date('h:i:s:A');

			$data = array(
				'nama_program' => $program,
				'tgl_buka' => $pembukaan_datetime->format('d'),
				'bln_buka' => $pembukaan_datetime->format('F'),
				'thn_buka' => $pembukaan_datetime->format('Y'),
				'jam_buka' => $pembukaan_datetime->format('H'),
				'menit_buka' => $pembukaan_datetime->format('i'),
				'detik_buka' => $pembukaan_datetime->format('s'),
				'tgl_tutup' => $penutupan_datetime->format('d'),
				'bln_tutup' => $penutupan_datetime->format('F'),
				'thn_tutup' => $penutupan_datetime->format('Y'),
				'jam_tutup' => $penutupan_datetime->format('H'),
				'menit_tutup' => $penutupan_datetime->format('i'),
				'detik_tutup' => $penutupan_datetime->format('s'),
				'keterangan' => $keterangan,
				'tanggal_update' => $tanggal_update,
    			'jam_update' => $jam_update,
				'petugas' => $petugas
			);

			$this->db->where('id_tanggal', $id);
			if ($this->db->update('konfigurasi_tanggal', $data)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
															<strong>berhasil!</strong> data berhasil diupdate.
															<button type="button" class="btn-close" data-bs-dismiss="alert"
																aria-label="Close"><i class="bi bi-x"></i></button>
															</div>');
				redirect('admin/cfgtgl');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
															<strong>gagal!</strong> data gagal diupdate.
															<button type="button" class="btn-close" data-bs-dismiss="alert"
																aria-label="Close"><i class="bi bi-x"></i></button>
															</div>');
				redirect('admin/cfgtgl');
			}
		} else {
			redirect('auth');
		}
	}
	public function deletecfgtgl($id)
	{
		$post = $this->db->get_where('konfigurasi_tanggal', array('id_tanggal' => $id))->row();

		$this->db->where('id_tanggal', $id);
		$delete = $this->db->delete('konfigurasi_tanggal');

		if ($delete) {
			$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
															<strong>berhasil!</strong> data berhasil dihapus.
															<button type="button" class="btn-close" data-bs-dismiss="alert"
																aria-label="Close"><i class="bi bi-x"></i></button>
														</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
															<strong>Gagal!</strong> data gagal dihapus.
															<button type="button" class="btn-close" data-bs-dismiss="alert"
																aria-label="Close"><i class="bi bi-x"></i></button>
														</div>');
		}		
		redirect('admin/cfgtgl');
	}
	public function saveklnderak()
	{
		if ($this->session->userdata('role') == 'admin') {
			$this->load->library('upload');

			$config['upload_path'] = './assets/uploads/';
			$config['allowed_types'] = 'pdf';
			$config['max_size'] = 10000;

			$this->upload->initialize($config);

			$user_upload = $this->session->userdata('nim');

			if (!$this->upload->do_upload('file')) {
				$error = $this->upload->display_errors();
				echo 'File upload failed: ' . $error;
				return;
			} else {
				$file_data = $this->upload->data();
				$file_name = 'klndrak_' . $user_upload . '_' . uniqid() . $file_data['file_ext'];
				$file_path = $config['upload_path'] . $file_name;
				rename($file_data['full_path'], $file_path);
			}

			$data = array(
				'file_name' => $file_name
			);

			if ($this->db->insert('klndrak', $data)) {
				redirect('admin/klndrak');
			} else {
				echo 'Database insert failed';
				return;
			}
		} else {
			redirect('auth');
		}
	}
	public function updateklnderak($id)
	{
		if ($this->session->userdata('role') == 'admin') {
			$this->load->library('upload');

			// Konfigurasi upload
			$config['upload_path'] = './assets/uploads/';
			$config['allowed_types'] = 'pdf';
			$config['max_size'] = 10000;

			$this->upload->initialize($config);

			// Dapatkan nama file lama
			$old_file = $this->db->select('file_name')->get_where('klndrak', array('id' => $id))->row()->file_name;

			// Hapus file lama jika ada
			if (!empty($old_file)) {
				$file_path = $config['upload_path'] . $old_file;
				if (file_exists($file_path)) {
					unlink($file_path);
				}
			}

			// Lakukan proses upload file baru
			$user_upload = $this->session->userdata('nim');

			if (!$this->upload->do_upload('file')) {
				$error = $this->upload->display_errors();
				echo 'File upload failed: ' . $error;
				return;
			} else {
				$file_data = $this->upload->data();
				$file_name = 'klndrak_' . $user_upload . '_' . uniqid() . $file_data['file_ext'];
				$file_path = $config['upload_path'] . $file_name;
				rename($file_data['full_path'], $file_path);
			}

			// Update record di database dengan file baru
			$data = array(
				'file_name' => $file_name
			);

			$this->db->where('id', $id);
			if ($this->db->update('klndrak', $data)) {
				redirect('admin/klndrak');
			} else {
				echo 'Database update failed';
				return;
			}
		} else {
			redirect('auth');
		}
	}
	
	public function savesudo()
	{
		if ($this->session->userdata('role') == 'admin') {
			$this->load->library('upload');

			$config['upload_path'] = './assets/uploads/';
			$config['allowed_types'] = 'pdf';
			$config['max_size'] = 10000;

			$this->upload->initialize($config);

			$judul = $this->input->post('judul', true);
			$user_upload = $this->session->userdata('nim');
			$user = $this->session->userdata('name');

			if (!$this->upload->do_upload('file')) {
				$error = $this->upload->display_errors();
				echo 'File upload failed: ' . $error;
				return;
			} else {
				$file_data = $this->upload->data();
				$file_name = 'suDO_' . $user_upload . '_' . uniqid() . $file_data['file_ext'];
				$file_path = $config['upload_path'] . $file_name;
				rename($file_data['full_path'], $file_path);
			}
			
			
			$data = array(
				'judul_berita' => $judul,
				'file' => $file_name,
				
				'user_yang_posting' => $user
			);

			if ($this->db->insert('sk_do_file', $data)) {
				redirect('admin/filedo');
			} else {
				echo 'Database insert failed';
				return;
			}
		} else {
			redirect('auth');
		}
	}
	public function updatesudo($id)
	{
		if ($this->session->userdata('role') == 'admin') {
			$this->load->library('upload');

			// Konfigurasi upload
			$config['upload_path'] = './assets/uploads/';
			$config['allowed_types'] = 'pdf';
			$config['max_size'] = 10000;

			$this->upload->initialize($config);

			$judul = $this->input->post('judul', true);
			$user_upload = $this->session->userdata('nim');
			$user = $this->session->userdata('name');

			// Dapatkan nama file lama
			$old_file = $this->db->select('file_name')->get_where('klndrak', array('id' => $id))->row()->file_name;

			// Hapus file lama jika ada
			if (!empty($old_file)) {
				$file_path = $config['upload_path'] . $old_file;
				if (file_exists($file_path)) {
					unlink($file_path);
				}
			}

			// Lakukan proses upload file baru
			$user_upload = $this->session->userdata('nim');

			if (!$this->upload->do_upload('file')) {
				$error = $this->upload->display_errors();
				echo 'File upload failed: ' . $error;
				return;
			} else {
				$file_data = $this->upload->data();
				$file_name = 'klndrak_' . $user_upload . '_' . uniqid() . $file_data['file_ext'];
				$file_path = $config['upload_path'] . $file_name;
				rename($file_data['full_path'], $file_path);
			}

			// Update record di database dengan file baru
			
			
			$data = array(
				'judul_berita' => $judul,
				'file' => $file_name,
				'user_yang_posting' => $user
			);

			$this->db->where('id', $id);
			if ($this->db->update('sk_do_file', $data)) {
				redirect('admin/filedo');
			} else {
				echo 'Database update failed';
				return;
			}
		} else {
			redirect('auth');
		}
	}



}

