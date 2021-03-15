<?php
class Login extends CI_Controller
{
    public function cobalogin()
    {
        $data['judul'] = "Login Admin";

        $this->load->view('loginView/template/header');
        $this->load->view('LoginView/login', $data);
        $this->load->view('loginView/template/footer');

    }
}