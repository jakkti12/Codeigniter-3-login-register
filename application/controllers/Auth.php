<?php
class Auth extends CI_Controller
{
    public function logout()
    {
        $this->auth_model->logout();
        redirect('');
    }
}