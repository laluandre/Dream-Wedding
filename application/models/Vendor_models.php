<?php


class Vendor_models extends CI_Model
{
    public function getAllVendor()
    {
        return $this->db->get('vendor')->result_array();
    }

    public function getVendor($limit, $start, $kategori = null, $lokasi = null)
    {
        if($kategori)
        {
            $this->db->like('kategori_vendor', $kategori);
        }
        
        if($lokasi)
        {
            $this->db->like('lokasi_vendor', $lokasi);
        }

        return $this->db->get('vendor', $limit, $start, $kategori, $lokasi)->result_array();
    }

    public function countAllvendor()
    {
        return $this->db->get('vendor')->num_rows();
    }
    
}