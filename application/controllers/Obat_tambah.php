<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Obat_tambah extends CI_Controller
{

    public function index()
    {
        $page['title'] = 'Tambah Data Obat';
        $this->load->view('templates/sidebar', $page);
        $this->load->view('templates/navbar');
        $this->load->view('obat_tambah');
        $this->load->view('templates/footer');
    }
}
