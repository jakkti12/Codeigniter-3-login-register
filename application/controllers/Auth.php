<?php
class Auth extends CI_Controller
{
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