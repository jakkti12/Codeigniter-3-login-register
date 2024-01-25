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
       if($this->session->userdata('email')){
           redirect('');
       }
       $email = $this->input->post('email');
       $password = $this->input->post('password');
       
       $this->form_validation->set_rules('email' , 'Email' , 'required|valid_email');
       $this->form_validation->set_rules('password' , 'Password' , 'required|min_length[3]');
       
       if($this->form_validation->run()){
           $check_login = $this->auth_model->login($email , $password);
           
           if(!$check_login){
               $this->session->set_flashdata('fail_message' , 'Wrong password or email.');
               redirect('auth/login');
           }elseif($check_login->banned_users == "ban"){
               $this->session->set_flashdata('fail_message' , 'You’re temporarily banned from our website!');
               redirect('auth/login');
           }elseif($check_login){
               foreach($check_login as $key => $val){
                   $this->session->set_userdata($key , $val);
               }
               redirect('');
           }
       }
       
       
       $this->load->view('head');
       $this->load->view('auth/login'); 
    }
  
    public function logout()
    {
        $this->auth_model->logout();
        redirect('');
    }
  
    public function register()
    {
        if($this->session->userdata('email')){
            redirect('');
        }
        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
        $this->form_validation->set_rules('firstname' , 'First Name' , 'required|min_length[3]');
        $this->form_validation->set_rules('lastname' , 'Last Name' , 'required|min_length[3]');
        $this->form_validation->set_rules('email' , 'Email' , 'required|valid_email');
        $this->form_validation->set_rules('password' , 'Password' , 'required|min_length[3]');
        $this->form_validation->set_rules('conf_password' , 'Confirm Password' , 'required|matches[password]');
        
        if($this->form_validation->run()){
            $check_email = $this->auth_model->check_email($email);
            if($check_email){
                $this->session->set_flashdata('fail_message', 'User email already exists');
                redirect('auth/register');    
            }
            
            $check_register = $this->auth_model->register($firstname , $lastname , $email , $password);
            
            if($check_register){
                $this->session->set_flashdata('fail_message', 'New user has been added.');
                echo 'register success';
            }else{
                $this->session->set_flashdata('fail_message', 'There was a problem add new user');
                echo 'register fail';
            }
        }
        
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
  
     public function change_password()
     {
        $this->load->model('auth_model');
        
        $id = $this->session->userdata('id');
        $old_password = $this->input->post('old_password');
        $new_password = $this->input->post('new_password');
        
        $this->form_validation->set_rules('old_password' , 'Current password' , 'required|min_length[3]');
        $this->form_validation->set_rules('new_password' , 'New Password' , 'required|min_length[3]');
        $this->form_validation->set_rules('conf_password' , 'Confirm new password' , 'required|matches[new_password]');
        
        if($this->form_validation->run()){
            $check_password = $this->auth_model->check_password($id , $old_password);
            
            if(!$check_password){
                $this->session->set_flashdata('fail_message', 'Failed The password does not match the old password.');
                redirect('auth/change_password');
            }
            
            if($old_password == $new_password){
                $this->session->set_flashdata('fail_message', 'Failed to edit password!');
                redirect('auth/change_password');
            }
            
            $this->auth_model->change_password($id , $new_password);
            $this->session->set_flashdata('success_message', 'Password corrected successfully!');
            redirect('auth/change_password');
        }
        $this->load->view('head');
        $this->load->view('nav');
        $this->load->view('auth/change_password');
    }
}