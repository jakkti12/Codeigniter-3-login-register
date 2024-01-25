<?php
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
    }
  
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
        if(!$this->session->userdata('email')){
            redirect('');
        }
        $id = $this->session->userdata('id');
        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
        
        $user_info['user_info'] = $this->auth_model->get_user_info($id);
        
        $this->form_validation->set_rules('firstname' , 'Firstname' , 'required|min_length[5]|max_length[20]');
        $this->form_validation->set_rules('lastname' , 'Lastname' , 'required|min_length[5]|max_length[20]');
        
        if($this->form_validation->run()){
            
            $this->auth_model->update_profile($id , $firstname , $lastname);
            $this->session->set_flashdata('success_message', 'Profile updated successfully.');
            redirect(site_url() . 'auth/edit_profile');
            
        }
        $this->load->view('head');
        $this->load->view('nav');
        $this->load->view('auth/edit_profile',$user_info);
    }
}