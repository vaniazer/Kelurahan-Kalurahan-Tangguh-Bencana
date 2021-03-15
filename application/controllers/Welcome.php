<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('loginView/template/header');
		$this->load->view('loginView/pra_login');
		$this->load->view('loginView/template/footer');

		// $this->load->view('Template/Header');
		// $this->load->view('Jadwal/Tampil');
		// $this->load->view('Template/Footer');
	}

}
