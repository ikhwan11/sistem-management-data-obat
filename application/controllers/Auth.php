<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function index()
    {
        $page['title'] = 'Login User';
        $this->load->view('login', $page);
    }

    public function login_aksi()
    {

        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else {
            $username  = $this->input->post('username');
            $password  = md5($this->input->post('password'));

            $cek = $this->dora_model->cek_login($username, $password);


            if ($cek == FALSE) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                Username atau password salah!
              </div>');
                redirect('auth');
            } else {
                $this->session->set_userdata('username', $cek->username);
                $this->session->set_userdata('nama_depan', $cek->nama_depan);
                $this->session->set_userdata('id_user', $cek->id_user);

                redirect('welcome/');
            }
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', array('required' => '{field} tidak boleh kosong'));

        $this->form_validation->set_rules('password', 'Password', 'required', array('required' => '{field} tidak boleh kosong'));
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/');
    }
}
