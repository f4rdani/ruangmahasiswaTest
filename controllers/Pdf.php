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

    public function generate_pdfsuketmhs()
    {
        $nim = $this->session->userdata('nim');
        $data['name'] = $this->session->userdata('name');
        $data['mhs'] = $this->db->get_where('mhs', ['nim' => $nim])->row();

        $this->db->select('email_prodi.prodi');
        $this->db->from('mhs');
        $this->db->join('email_prodi', 'mhs.kd_jrs = email_prodi.id');
        $this->db->where('mhs.nim', $nim);
        $data['studi'] = $this->db->get()->row();
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

        // Output PDF ke browser
        $dompdf->stream("Surat_Keterangan_".$data['mhs']->nim.".pdf", array("Attachment" => false));
    }
    public function generate_pdfsuratdo()
    {
        $nim = $this->input->get('nim', true);
        $nama = $this->input->get('nama', true);
        $data = [
            'nama' => $nama,
            'nim' => $nim,
            'tanggal' => '19 Februari 2024'
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
