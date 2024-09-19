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


	// Password menggunakan API Twillo Trial 


	public function forgotpass()
	{
		
	
		$this->load->view('forgotpass');
		
	}
	public function forgot_password()
{
    // Ambil nim dari form
    $nim = $this->input->post('nim');
    
    // Cari pengguna berdasarkan nim
    $user = $this->db->get_where('mhs', ['nim' => $nim])->row();
    $phone_number_obj = $this->db->select('telp')
                         ->get_where('mhs', ['nim' => $nim])
                         ->row();

    if ($user) {
        // Ambil nomor telepon dari object
        $phone_number = $phone_number_obj->telp;

        // Buat password baru
        $new_password = $this->generate_password();
        
        // Update password baru ke database
        $this->db->update('mhsregs', ['passwd' => password_hash($new_password, PASSWORD_BCRYPT)], ['nim' => $nim]);

        // Kirim pesan WA dengan kata sandi baru
        $this->send_whatsapp($phone_number, $new_password);

        // Beri pesan sukses dan redirect ke halaman login
        $last_four_digits = substr($phone_number, -4);
        $this->session->set_flashdata('message', 'Password baru telah dikirim melalui WhatsApp *****'. $last_four_digits);

        redirect('Auth/forgotpass');
    } else {
        // Jika nim tidak ditemukan, beri pesan error
        $this->session->set_flashdata('error', 'NIM tidak ditemukan.');
        redirect('forgot_password');
    }
}

    private function generate_password($length = 8)
    {
        return substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, $length);
    }

    private function send_whatsapp($phone_number, $new_password)
{
    // Pastikan nomor telepon diformat dalam format internasional
    if (substr($phone_number, 0, 1) == '0') {
        $phone_number = '+62' . substr($phone_number, 1); // Ubah 0 di depan jadi +62 (kode negara Indonesia)
    }

    $sid = 'AC5b7e04966674f4eb8c8e36e2b830de64'; // Ganti dengan SID Twilio Anda
    $token = '39eaba7a4b89752ece30580dd31bb22b'; // Ganti dengan Token Twilio Anda
    $twilio_number = 'whatsapp:+14155238886'; // Ganti dengan nomor WhatsApp Twilio Anda

    $client = new Client($sid, $token);
    
    // Pesan yang dikirimkan ke pengguna
    $message = "Halo, password baru Anda adalah: " . $new_password;

    // Kirim pesan ke WhatsApp
    $client->messages->create(
        'whatsapp:' . $phone_number, // Nomor WhatsApp penerima dalam format internasional
        [
            'from' => $twilio_number,
            'body' => $message
        ]
    );
}
}
