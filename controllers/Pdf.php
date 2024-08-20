<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Dompdf\Dompdf;
use Dompdf\Options;

class Pdf extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('upload');
    }
    public function test_pdfsuketmhs()
    {
        $nim = $this->session->userdata('nim');
        $data['name'] = $this->session->userdata('name');
        $data['mhs'] = $this->db->get_where('mhs', ['nim' => $nim])->row();

        // Lakukan join untuk mendapatkan nm_jrs
        $this->db->select('jrskampus.nm_jrs'); 
        $this->db->from('mhs');
        $this->db->join('jrskampus', 'mhs.kd_jrs = jrskampus.kd_jrs');
        $this->db->where('mhs.nim', $nim);
        $data['studi'] = $this->db->get()->row();
       

        
        $this->load->view('pdf/pdfsuketmhs', $data);
        
    }
    public function test_pdfskdo()
    {
        $nim = $this->session->userdata('nim');
        $data['name'] = $this->session->userdata('name');
        $data['mhs'] = $this->db->get_where('mhs', ['nim' => $nim])->row();

        // Lakukan join untuk mendapatkan nm_jrs
        $this->db->select('jrskampus.nm_jrs'); 
        $this->db->from('mhs');
        $this->db->join('jrskampus', 'mhs.kd_jrs = jrskampus.kd_jrs');
        $this->db->where('mhs.nim', $nim);
        $data['studi'] = $this->db->get()->row();
       

        
        $this->load->view('pdf/pdfsuratdo', $data);
        
    }
    public function cetaksuketriset()
    {
        // Ambil nilai 'no' dari POST
        $no = $this->input->post('no', true);
    
        // Ambil data dari tabel surat_riset berdasarkan 'no'
        $surat_riset = $this->db->get_where('surat_riset', ['no' => $no])->row();
    
        // Pastikan data surat_riset ditemukan
        if (!$surat_riset) {
            show_error('Data tidak ditemukan di tabel surat_riset.', 404);
            return;
        }
    
        // Ambil data dari session dan tabel mhs
        $nim = $this->session->userdata('nim');
        $data['name'] = $this->session->userdata('name');
        $data['mhs'] = $this->db->get_where('mhs', ['nim' => $nim])->row();
    
        // Lakukan join untuk mendapatkan nm_jrs
        $this->db->select('jrskampus.nm_jrs'); 
        $this->db->from('mhs');
        $this->db->join('jrskampus', 'mhs.kd_jrs = jrskampus.kd_jrs');
        $this->db->where('mhs.nim', $nim);
        $data['studi'] = $this->db->get()->row();
    
        // Tambahkan data dari surat_riset ke array data yang akan dikirim ke view
        $data['surat_riset'] = $surat_riset;
    
        // Load view dengan data yang telah digabungkan
        $this->load->view('pdf/pdfsurat_riset', $data);
    }
     public function test_pdfkrs()
    {
        $nim = $this->session->userdata('nim');
        $data['mhs'] = $this->db->get_where('mhs', ['nim' => $nim])->row();
        $this->db->select('jrskampus.nm_jrs');
        $this->db->from('mhs');
        $this->db->join('jrskampus', 'mhs.kd_jrs = jrskampus.kd_jrs');
        $this->db->where('mhs.nim', $nim);
        $data['studi'] = $this->db->get()->row();
        $mahasiswa = $this->db->get_where('mhs', ['nim' => $nim])->row();
        $kd_lokal = $mahasiswa->kd_lokal;
         // Ambil jadwal kuliah berdasarkan kd_lokal dan urutkan berdasarkan hari
         $this->db->select('pertemuan.*, mtk.nm_mtk');
         $this->db->from('pertemuan');
         $this->db->join('mtk', 'pertemuan.kd_mtk = mtk.kd_mtk');
         $this->db->where('pertemuan.kd_lokal', $kd_lokal);
         $this->db->order_by("FIELD(pertemuan.hari_t, 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat')");
         $data['jadwal'] = $this->db->get()->result();
       

        
        $this->load->view('pdf/pdfkrs', $data);
        
    }
    
    public function generate_pdfsuketmhs()
    {
        // Ambil data input dengan aman
        $date = $this->input->get('log_date', true);
        $jam = $this->input->get('log_time', true);
        $nim = $this->session->userdata('nim');
        $name = $this->session->userdata('name');
    
        // Pastikan NIM tersedia
        if (empty($nim)) {
            show_error('NIM tidak ditemukan dalam sesi.', 500);
            return;
        }
    
        // Ambil data mahasiswa
        $mhs = $this->db->get_where('mhs', ['nim' => $nim])->row();
        if (!$mhs) {
            show_error('Data mahasiswa tidak ditemukan.', 404);
            return;
        }
    
        // Lakukan join untuk mendapatkan nm_jrs
        $this->db->select('jrskampus.nm_jrs'); 
        $this->db->from('mhs');
        $this->db->join('jrskampus', 'mhs.kd_jrs = jrskampus.kd_jrs');
        $this->db->where('mhs.nim', $nim);
        $studi = $this->db->get()->row();
    
        // Gabungkan semua data ke dalam satu array
        $data = [
            'date'  => $date,
            'jam'   => $jam,
            'name'  => $name,
            'mhs'   => $mhs,
            'studi' => $studi
        ];
    
        // Load view dan simpan output sebagai string
        $html = $this->load->view('pdf/pdfsuketmhs', $data, true);
    
        // Konfigurasi Dompdf
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);
    
        // Inisialisasi Dompdf
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
    
        // Render PDF
        $dompdf->render();
    
        // Nama file PDF
        $filename = "Surat_Keterangan_" . $mhs->nim . ".pdf";
    
        // Output PDF ke browser
        $dompdf->stream($filename, array("Attachment" => false));
    }
    public function generate_pdfsuratdo()
    {
        $nim = $this->input->get('nim', true);
        $nama = $this->input->get('nama', true);
        $data = [
            'nama' => $nama,
            'nim' => $nim,
         
        ];

        // Load view dan simpan output sebagai string
        $html = $this->load->view('pdf/pdfsuratdo', $data, true);

        // Konfigurasi Dompdf
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);

        // Inisialisasi Dompdf
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF
        $dompdf->render();

        // Output PDF ke browser
        $dompdf->stream("Surat_Keterangan_.pdf", array("Attachment" => false));
    }
}
