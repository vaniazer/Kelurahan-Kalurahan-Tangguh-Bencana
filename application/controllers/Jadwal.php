<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	
	public function index()
	{
		$data['judul']="Jadwal";
		$this->load->view('Template/Header',$data);
		$this->load->view('Jadwal/Tampil');
		$this->load->view('Template/Footer');
	}

	public function tambah()
	{
		$data['judul']="Input Jadwal";
		$this->load->view('Template/Header',$data);
		$this->load->view('Jadwal/Input');
		$this->load->view('Template/Footer');
	}

}