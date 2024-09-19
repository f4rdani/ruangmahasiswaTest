<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function test()
	{
		$this->load->view('test');
	}
	public function test1()
	{
		$this->load->view('test1');
	}
	public function test2()
	{
		$this->load->view('test2');
	}
	public function index()
	{
	$random_number1 = mt_rand(1, 9);
    $random_number2 = mt_rand(1, 9);

    // Prepare CAPTCHA question
    $captcha_question = "Berapa hasil dari $random_number1 + $random_number2?";
    $correct_captcha_answer = $random_number1 + $random_number2;

    // Store the correct answer in session to validate later
    $this->session->set_userdata('captcha_answer', $correct_captcha_answer);

    $data['captcha_question'] = $captcha_question;
	$data['correct_captcha_answer'] =  $correct_captcha_answer;
	$data['data'] = $this->db->get('info_luar')->result();
	$data['dat'] = $this->db->get('pengumuman')->result();
	
	$data['countAktif'] = $this->db->where('kondisi', 1)->count_all_results('mhs');
	$data['countCuti'] = $this->db->where('kondisi', 3)->count_all_results('mhs');
	$data['countLulus'] = $this->db->where('kondisi', 5)->count_all_results('mhs');
	$data['countRegistrasi'] = $this->db->where('kondisi', 7)->count_all_results('mhs');
	// $this->load->view('layouts/welcomeheader', $data);
    $this->load->view('welcome_message', $data);
	// $this->load->view('layouts/welcomefooter', $data);
	}

	public function ceksk($nim)
	{
		// Ambil data berdasarkan nim
		$data['user'] = $this->db->get_where('sk_surat_do', ['nim' => $nim])->row();

		// Jika data nim tidak ditemukan
		if (empty($data['user'])) {
			// Redirect ke halaman welcome
			redirect('welcome');
		}

		$data['dat'] = $this->db->get('pengumuman')->result();
		$data['da'] = $this->db->get('sk_do_file')->result();

		// Load views
		$this->load->view('layouts/welcomeheader', $data);
		$this->load->view('ceksk', $data);
		$this->load->view('layouts/welcomefooter', $data);
	}

	public function ceknim($nim)
	{
		// Ambil data berdasarkan nim
		$data['user'] = $this->db->get_where('penggantian_nim', ['nim_lama' => $nim])->row();

		// Jika data nim tidak ditemukan
		if (empty($data['user'])) {
			// Redirect ke halaman welcome
			redirect('welcome');
		}

		$data['dat'] = $this->db->get('pengumuman')->result();

		// Load views
		$this->load->view('layouts/welcomeheader', $data);
		$this->load->view('ceknim', $data);
		$this->load->view('layouts/welcomefooter', $data);
	}

	public function aktivasi_mahasiswa()
	{
		$data['data'] = $this->db->get('info_luar')->result();
	$data['dat'] = $this->db->get('pengumuman')->result();
	$this->load->view('layouts/welcomeheader',$data );
    $this->load->view('aktivasimhs', $data);
	$this->load->view('layouts/welcomefooter',$data );
	}


	public function login_ceknim()
	{
		$nim = $this->input->post('nim');
		$pilih = $this->input->post('pilih');
		
		// Verifikasi nim di tabel mhsregs
		$user = $this->db->get_where('sk_surat_do', ['nim' => $nim])->row();
		
		// Jika tidak ditemukan di tabel mhsregs, periksa di tabel penggantian_nim
		if (!$user) {
			$user = $this->db->get_where('penggantian_nim', ['nim_lama' => $nim])->row();
		}

		if ($user) {
			// Jika nim ditemukan, verifikasi pilihan
			if ($pilih) {
				if ($pilih == "nimbaru") {
					redirect('Welcome/ceknim/' . $nim);
				} elseif ($pilih == "suratsk") {
					redirect('Welcome/ceksk/' . $nim);
				} else {
					// Pilihan tidak valid
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Pilihan tidak valid!</div>');
					redirect('welcome');
				}
			} else {
				// Pilihan tidak ada
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Pilihan tidak valid!</div>');
				redirect('welcome');
			}
		} else {
			// nim tidak ditemukan di kedua tabel
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">NIM tidak ditemukan!</div>');
			redirect('welcome');
		}
	}

	public function homeceknim()
	{
	$data['data'] = $this->db->get('info_luar')->result();
	$data['dat'] = $this->db->get('pengumuman')->result();
	$this->load->view('layouts/welcomeheader', $data );
    $this->load->view('loginceknim', $data);
	$this->load->view('layouts/welcomefooter', $data );
	}

	public function display($file_name) {
        $file_path = FCPATH . 'assets/uploads/' . $file_name;

        if (file_exists($file_path)) {
            $mime = mime_content_type($file_path);
            header('Content-Type: ' . $mime);
            readfile($file_path);
        } else {
            show_404();
        }
    }
	public function view_file($type, $filename) {
        $path = '';
        switch ($type) {
            case 'surat_pengajuan':
                $path = 'assets/uploads/surat/suratbio/' . $filename;
                break;
            case 'ktp':
                $path = 'assets/uploads/surat/suratbio/' . $filename;
                break;
            case 'kk':
                $path = 'assets/uploads/surat/suratbio/' . $filename;
                break;
            case 'akte_lahir':
                $path = 'assets/uploads/surat/suratbio/' . $filename;
                break;
            case 'ktm':
                $path = 'assets/uploads/surat/suratbio/' . $filename;
                break;
            case 'ijasah':
                $path = 'assets/uploads/surat/suratbio/' . $filename;
                break;
            case 'transkip':
                $path = 'assets/uploads/surat/suratbio/' . $filename;
                break;
            default:
                show_404();
                return;
        }

        if (file_exists($path)) {
            $this->load->helper('file');
            $mime = get_mime_by_extension($path);
            header('Content-Type: ' . $mime);
            readfile($path);
        } else {
            show_404();
        }
    }

}
