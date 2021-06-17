<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    public function index()
    {

        $dari = $this->input->post('dari');
        $sampai = $this->input->post('sampai');

        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $page['title'] = 'Laporan';
            $this->load->view('templates/sidebar', $page);
            $this->load->view('templates/navbar');
            $this->load->view('laporan_filter');
            $this->load->view('templates/footer');
        } else {
            $data = array(
                'keluar' => $this->db->query("SELECT * FROM tb_stok_keluar tsk INNER JOIN tb_obat tob ON tsk.id_obat = tob.id_obat")->result_array(),
                'masuk' => $this->db->query("SELECT * FROM tb_stok_masuk tsm INNER JOIN tb_obat tob ON tsm.id_obat = tob.id_obat")->result_array(),
            );

            $page['title'] = 'Laporan';
            $this->load->view('templates/sidebar', $page);
            $this->load->view('templates/navbar');
            $this->load->view('laporan_tampil', $data);
            $this->load->view('templates/footer');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('dari', 'Dari Tanggal', 'required');
        $this->form_validation->set_rules('sampai', 'Sampai Tanggal', 'required');
    }
}
