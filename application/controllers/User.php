<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {
        $page['title'] = 'User';
        $this->load->view('templates/sidebar', $page);
        $this->load->view('templates/navbar');
        $this->load->view('user_data');
        $this->load->view('templates/footer');
    }

    // create
    public function tambah_user()
    {
        $page['title'] = 'User';
        $this->load->view('templates/sidebar', $page);
        $this->load->view('templates/navbar');
        $this->load->view('user_tambah');
        $this->load->view('templates/footer');
    }


    // update
    public function update_user()
    {
        $page['title'] = 'User';
        $this->load->view('templates/sidebar', $page);
        $this->load->view('templates/navbar');
        $this->load->view('user_update');
        $this->load->view('templates/footer');
    }
}
