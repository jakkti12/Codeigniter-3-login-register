<?php
class Auth_model extends CI_Model
{
    function logout()
    {
        $user_data = array(
            'email' => '',
            'password' => '',
            'status' => '',
        );
        $this->session->set_userdata($user_data);
        return true;
    }
}