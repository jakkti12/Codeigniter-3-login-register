<?php
class Auth_model extends CI_Model
{
    function update_profile($id=null , $firstname=null , $lastname=null)
    {
        $this->db->where('id', $id);
        $user_data = array(
            'firstname' => $firstname,
            'lastname' => $lastname
        );
        $this->db->update('users' , $user_data);
        $success = $this->db->affected_rows();
        return $success;
    }
    
    function get_user_info($id=null)
    {
        $query = $this->db->get_where('users', array('id' => $id));
        return $query->row_array();
    }
}