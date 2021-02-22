<?php
defined('BASEPATH') or exit('No direct script access allowed');

class profilev extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('vendor', ['email' => $this->session->userdata('email')])->row_array();

        if ($data['user'] == NULL) {
            redirect('auth');
        } else {
            $data['title'] = $data['user']['nama_vendor'];
            $data['link'] = 'profilev';
            $data['class'] = 'icon-user';
            $data['toggle'] = '';
        }

        $this->load->view('bar/header', $data);
        $this->load->view('profilev/index', $data);
        $this->load->view('bar/footer', $data);
    }

    public function cek_update_profile()
    {   
        $data['vendor'] = $this->db->get_where('vendor', ['email' => $this->session->userdata('email')])->row_array();
        
        $nama = $this->input->post('nama');
        $telephon = $this->input->post('phone');
        $lokasi = $this->input->post('lokasi');
        $kategori = $this->input->post('category');

        $upload_image = $_FILES['foto']['name'];

        if($upload_image){
            $config['upload_path']   = './assets/images/profile';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '4096';
            
            $this->load->library('upload', $config);

            if($this->upload->do_upload('foto')){
                $new_image = $this->upload->data('file_name');
                $this->db->set('profil_vendor', $new_image);
            }else {
                echo $this->upload->display_errors();                
           }
        }

        $this->db->set('nama_vendor', $nama);
        $this->db->set('lokasi_vendor', $lokasi);
        $this->db->set('kategori_vendor', $kategori);
        $this->db->set('telpon_vendor', $telephon); 
        $this->db->where('id_vendor', $data['vendor']['id_vendor']);
        $this->db->update('vendor');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
               Edit Profile Berhasil!</div>');
        redirect('profilev');
    }

    public function cek_change_password()
    {
        $data['vendor'] = $this->db->get_where('vendor', ['email' => $this->session->userdata('email')])->row_array();
        
        $old_pass = $this->input->post('password0');

        if(password_verify($old_pass, $data['vendor']['password'])){
            $new_pass = $this->input->post('password1');
            $conf_pass = $this->input->post('password2');
            if($new_pass != $conf_pass){
                $this->session->set_flashdata('message', '<div class="alert alert-danger role="alert">
                Password Tidak Cocok!</div>');
                redirect('profilev');
            }else {
                $hash_pass = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
                $this->db->set('password', $hash_pass);
                $this->db->where('email_user', $data['user']['email_user']);
                $this->db->update('user');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Ubah Password Berhasil!</div>');
                redirect('profilev');
                
            }
        }else{ 
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Password Tidak Benar!</div>');
            redirect('profilev');
        }
    }
}
