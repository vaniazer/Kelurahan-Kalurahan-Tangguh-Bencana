<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

	
	public function index()
	{
		$data['judul']="Kelola Kegiatan";
		$this->load->view('Template/Header',$data);
		$this->load->view('Kegiatan/Input');
		$this->load->view('Template/Footer');
	}

	public function HR()
	{
		$data['judul']="HR";
		$this->load->view('Template/Header',$data);
		$this->load->view('Kegiatan/HR');
		$this->load->view('Template/Footer');
	}

}