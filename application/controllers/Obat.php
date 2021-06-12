<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Obat extends CI_Controller
{

    public function index()
    {
        $page['title'] = 'Data Obat';
        $this->load->view('templates/sidebar', $page);
        $this->load->view('templates/navbar');
        $this->load->view('obat_data');
        $this->load->view('templates/footer');
    }

    public function Update_obat()
    {
        $page['title'] = 'Update Data Obat';
        $this->load->view('templates/sidebar', $page);
        $this->load->view('templates/navbar');
        $this->load->view('obat_edit');
        $this->load->view('templates/footer');
    }
}
