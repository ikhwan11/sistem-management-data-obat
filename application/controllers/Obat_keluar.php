<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Obat_keluar extends CI_Controller
{

    public function index()
    {
        $page['title'] = 'Stok Keluar';
        $this->load->view('templates/sidebar', $page);
        $this->load->view('templates/navbar');
        $this->load->view('stok_keluar');
        $this->load->view('templates/footer');
    }
}
