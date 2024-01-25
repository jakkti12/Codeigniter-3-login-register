<?php
class Auth_model extends CI_Model
{
    function login($email=null , $password=null)
    {
        if(empty($email) || empty($password)){
            return false;
        }else{
            $query = $this->db->query("SELECT * FROM users WHERE email = '$email' ");
            $check_login = $query->row();
            $count = $query->num_rows();
            $item = $query->result();
            
            $hash_password = md5($password);
            
            if($count == 1){
                foreach($item as $row){
                    if($row->email == $email && $row->password == $hash_password){
                        return $check_login;
                    }
                }
            }
        }
        return false;
    }
}