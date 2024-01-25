<?php
class Auth_model extends CI_Model
{
    function change_password($id=null , $new_password=null)
    {
        $this->db->where('id' , $id);
        $new_password = array(
            'password' => md5($new_password)
        );
        $this->db->update('users' , $new_password);
        $success = $this->db->affected_rows();
        return $success;
    }
    
    function check_password($id=null , $old_password=null)
    {
        $query = $this->db->query("SELECT * FROM users WHERE id = '$id' ");
        $check_password = $query->result();
        
        $hash_password = md5($old_password);
        
        foreach($check_password as $row){
            if($row->password == $hash_password){
                return true;
            }
        }
        return false;
    }
}