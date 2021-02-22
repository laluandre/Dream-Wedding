<?php


class User_models extends CI_Model
{
    public function getAlluser()
    {
        return $this->db->get('user')->result_array();
    }

    public function getUser($limit, $start, $email = null, $nama = null)
    {
        if($email)
        {
            $this->db->like('email_user', $email);
        }
        
        if($nama)
        {
            $this->db->like('nama_user', $nama);
        }

        return $this->db->get('user', $limit, $start, $email, $nama)->result_array();
    }

    public function countAlluser()
    {
        return $this->db->get('user')->num_rows();
    }
    
}