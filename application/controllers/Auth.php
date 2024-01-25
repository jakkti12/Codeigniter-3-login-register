<?php
class Auth extends CI_Controller
{
    public function register()
    {
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
}