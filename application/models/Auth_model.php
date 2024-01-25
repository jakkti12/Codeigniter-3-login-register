<?php
class Auth_model extends CI_Model
{
    function register($firstname=null , $lastname=null , $email=null , $password)
    {
        $user_data = array(
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'password' => md5($password),
            'status' => '1',
            'banned_users' => 'unban',
            'role' => '1'
        );
        
        $this->db->insert('users' , $user_data);
        return true;
    }
    
    function check_email($email=null)
    {
        $this->db->get_where('users' , array('email' => $email), 1);
        $check_email = $this->db->affected_rows();
        if($check_email > 0){
            return true;
        }else{
            return false;
        }
    }
}