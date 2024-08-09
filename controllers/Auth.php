<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
		
        if ($this->session->userdata('nim')) {
			if ($this->session->userdata('role') == 'mahasiswa') {
				redirect('mahasiswa');
			}
			if ($this->session->userdata('role') == 'admin') {
				redirect('admin/dashboard');
			}
		}

		

        $this->form_validation->set_rules('username', 'nim', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
		
			$this->load->view('admin/loginadmin');
            
        } else {
            // validasinya success
            $this->_login();
        }
    }

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$captcha_answer = $this->input->post('captcha_answer');
		$correct_captcha_answer = $this->input->post('correct_captcha_answer');

		// Memeriksa captcha terlebih dahulu
		if ($correct_captcha_answer == $captcha_answer) {
			$user = $this->db->get_where('mhsregs', ['nim' => $username])->row();

			// Jika user tidak ditemukan di tabel 'mhsregs', cari di tabel 'admin'
			if (!$user) {
				$user = $this->db->get_where('admin', ['nip' => $username])->row();
			}

			if ($user) {
				// Memeriksa password
				if (password_verify($password, $user->passwd)) {
					// Menentukan peran berdasarkan tabel yang digunakan atau default 'mahasiswa'
					$role = isset($user->role) ? $user->role : 'mahasiswa';

					$data = [
						'nim'   => $user->nim ?? $user->nip,
						'role'  => $role,
						'name'  => $user->nm_mhs ?? $user->name,
						'email' => $user->email,
					];
					$this->session->set_userdata($data);

					// Redirect berdasarkan peran
					if ($role == "mahasiswa") {
						redirect('Mahasiswa');
					}elseif ($role){
						redirect('Admin/dashboard');
					} else {
						redirect('Auth/logout');
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
					redirect('welcome');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username tidak ditemukan!</div>');
				redirect('welcome');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Captcha salah!</div>');
			redirect('welcome');
		}
	}

    public function logout()
    {
					// $log = array(
					// 	'user_id' => $this->session->userdata('id'),
					// 	'kegiatan' => 'Logout'. $username,
					// );
					// $this->db->insert('logs',$log);

        $this->session->unset_userdata('nim');
        $this->session->unset_userdata('role');
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('email');
        


        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('auth');
    }
    public function logoutmhs()
    {
	    $this->session->unset_userdata('nim');
        $this->session->unset_userdata('role');
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('email');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('welcome');
    }

    public function loginmhs()
    {
		
        if ($this->session->userdata('nim')) {
			if ($this->session->userdata('role') == 'user') {
				redirect('Welcome');
			}
			
		}

		
        $this->form_validation->set_rules('username', 'nim', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        

        if ($this->form_validation->run() == false) {
			

            redirect('welcome');
        } else {
            // validasinya success
            $this->_login();
        }
    }

}
