<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$data = array(
			'habis' => $this->db->query("SELECT * FROM tb_obat WHERE stok = '0'")->result_array(),
			'keluar' => $this->db->query("SELECT * FROM tb_stok_keluar tsk INNER JOIN tb_obat tob ON tsk.id_obat = tob.id_obat")->result_array()
		);
		$page['title'] = 'Dashboard';
		$this->load->view('templates/sidebar', $page);
		$this->load->view('templates/navbar');
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer');
	}
}
