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
    
    public function login()
    {
       $this->load->view('head');
       $this->load->view('auth/login'); 
    }
    
    public function register()
    {
        $this->load->view('head');
        $this->load->view('auth/register');
    }
    
    public function edit_profile()
    {
        $this->load->view('head');
        $this->load->view('auth/edit_profile');
    }
}