<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Obat_tambah extends CI_Controller
{

    public function tambah_obat()
    {
        $page['title'] = 'Tambah Data Obat';
        $this->load->view('templates/sidebar', $page);
        $this->load->view('templates/navbar');
        $this->load->view('obat_tambah');
        $this->load->view('templates/footer');
    }

    public function tambah_obat_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_obat();
        } else {
            $kode_obat = $this->input->post('kode');
            $merk_obat = $this->input->post('merk');
            $kegunaan = $this->input->post('kegunaan');
            $harga = $this->input->post('harga');
            $jenis = $this->input->post('jenis');
            $foto = $_FILES['foto']['name'];

            if ($foto = '') {
            } else {
                $config['upload_path']     = './assets/foto_obat';
                $config['allowed_types']    = 'jpg|jpeg|png';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('foto')) {
                    echo "Foto gagal di upload!";
                } else {
                    $foto = $this->upload->data('file_name');
                }
            }

            $data = array(
                'kode_obat' => $kode_obat,
                'merk_obat' => $merk_obat,
                'kegunaan' => $kegunaan,
                'harga' => $harga,
                'jenis' => $jenis,
                'foto' => $foto,
                'stok' => 0,
            );

            $this->dora_model->insert_data($data, 'tb_obat');

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Tambah obat berhasil!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
            redirect('obat/');
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('kode', 'Kode obat', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('merk', 'Merk obat', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('kegunaan', 'Kegunaan', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('harga', 'Harga obat', 'required', array('required' => '{field} tidak boleh kosong!'));
        $this->form_validation->set_rules('jenis', 'Jenis obat', 'required', array('required' => '{field} tidak boleh kosong!'));
    }
}
