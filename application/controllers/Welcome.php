<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$page['title'] = 'Dashboard';
		$this->load->view('templates/sidebar', $page);
		$this->load->view('templates/navbar');
		$this->load->view('dashboard');
		$this->load->view('templates/footer');
	}
}
