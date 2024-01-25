<?php
class Auth extends CI_Controller
{
    public function login()
    {
        $this->load->model('auth_model');
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
       
       
       $this->load->view('auth/login');
    }
}