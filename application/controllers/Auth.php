<?php
class Auth extends CI_Controller
{
    public function index()
    {
        $this->load->view('head');
        $this->load->view('nav');
        $this->load->view('content');
        $this->load->view('footer');
    }

}