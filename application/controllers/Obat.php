<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Obat extends CI_Controller
{

    public function index()
    {
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        $config['base_url'] = 'http://localhost/skripsi_dora/obat/index';

        $this->db->like('merk_obat', $data['keyword']);
        $this->db->from('tb_obat');

        $config['total_rows'] = $this->db->count_all_results();


        $config['per_page'] = 6;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);

        $data = array(
            'obat' => $this->dora_model->getObat($config['per_page'], $data['start'], $data['keyword']),
            'start' => $this->uri->segment(3),
            'total_rows' => $config['total_rows']
        );
        $page['title'] = 'Data Obat';
        $this->load->view('templates/sidebar', $page);
        $this->load->view('templates/navbar');
        $this->load->view('obat_data', $data);
        $this->load->view('templates/footer');
    }

    public function detail_obat($id)
    {
        $data = array(
            'obat' => $this->dora_model->ambil_id_obat($id),
        );
        $page['title'] = 'Detail Obat';
        $this->load->view('templates/sidebar', $page);
        $this->load->view('templates/navbar');
        $this->load->view('obat_detail', $data);
        $this->load->view('templates/footer');
    }

    // tambah stok obat

    public function tambah_stok_aksi()
    {
        $id_obat = $this->input->post('id');
        $tanggal = $this->input->post('tanggal');
        $qty = $this->input->post('qty');

        $data = array(
            'id_obat' => $id_obat,
            'tanggal' => $tanggal,
            'qty' => $qty,
        );

        $this->dora_model->insert_data($data, 'tb_stok_masuk');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Tambah stok berhasil!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
        redirect('obat/');
    }

    // kurang stok obat

    public function kurang_stok_aksi()
    {
        $id_obat = $this->input->post('id');
        $keterangan = $this->input->post('ket');
        $tanggal = $this->input->post('tanggal');
        $qty = $this->input->post('qty');

        $data = array(
            'id_obat' => $id_obat,
            'tanggal' => $tanggal,
            'keterangan' => $keterangan,
            'qty' => $qty,
        );

        $this->dora_model->insert_data($data, 'tb_stok_keluar');

        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				stok keluar berhasil!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
        redirect('obat/');
    }

    public function update_obat()
    {
        $page['title'] = 'Update Data Obat';
        $this->load->view('templates/sidebar', $page);
        $this->load->view('templates/navbar');
        $this->load->view('obat_edit');
        $this->load->view('templates/footer');
    }
}
