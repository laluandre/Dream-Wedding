<?php
defined('BASEPATH') or exit('No direct script access allowed');

class profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email_user' => $this->session->userdata('email')])->row_array();
        
        if ($data['user'] == NULL) {
            redirect('auth');
        } else {
            $data['title'] = $data['user']['nama_user'];
            $data['link'] = 'profile';
            $data['class'] = 'icon-user';
            $data['toggle'] = '';
        }
        
        $data['nama'] = $data['user']['nama_user'];
        $data['email'] = $data['user']['email_user'];
        $data['telp'] = $data['user']['phone_user'];

        $data['profile'] = $data['user']['profile'];
        $data['id_user'] = $data['user']['id_user'];
        
        $data['history'] = $this->db->get_where('history', ['id_user' => $data['id_user']])->row_array();

        $data['id_vendor'] = $data['history']['id_vendor'];
        $data['vendor'] = $this->db->get_where('vendor', ['id_vendor' => $data['id_vendor']])->row_array();
        $data['nama_vendor'] = $data['vendor']['nama_vendor'];
        
        $data['date'] = $data['history']['date_time'];
        
        $this->load->view('bar/header', $data);
        $this->load->view('profile/index', $data);
        $this->load->view('bar/footer', $data);
    }

    public function cek_update_profile()
    {   
        $data['user'] = $this->db->get_where('user', ['email_user' => $this->session->userdata('email')])->row_array();

        $nama = $this->input->post('nama');
        $telephon = $this->input->post('phone');

        $upload_image = $_FILES['foto']['name'];

        $this->db->set('nama_user', $nama);
        $this->db->set('phone_user', $telephon);

        if($upload_image){
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = 4096;
            $config['upload_path']   = './assets/images/profile';

            $this->load->library('upload', $config);

            if($this->upload->do_upload('foto')){
                $new_image = $this->upload->data('file_name');
                $this->db->set('profile', $new_image);
                
            }else {
                echo $this->upload->display_errors();                
           } 
        }
        
        $this->db->where('email_user', $data['user']['email_user']);
        $this->db->update('user');
        $this->session->set_flashdata('message_berhasil', '<div class="alert alert-success" role="alert">
               Edit Profile Berhasil!</div>');
        redirect('profile');
    }

    public function cek_change_password()
    {
        $data['user'] = $this->db->get_where('user', ['email_user' => $this->session->userdata('email')])->row_array();
        
        $old_pass = $this->input->post('password0');
        $new_pass = $this->input->post('password1');
        $conf_pass = $this->input->post('password2');

        if(password_verify($old_pass, $data['user']['password'])){
            if($new_pass != $conf_pass){
                $this->session->set_flashdata('message', '<div class="alert alert-danger role="alert">
                Password Tidak Cocok!</div>');
                redirect('profile');
            }
            else {
                $hash_pass = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
                $this->db->set('password', $hash_pass);
                $this->db->where('email_user', $data['user']['email_user']);
                $this->db->update('user');
                $this->session->set_flashdata('message_berhasil', '<div class="alert alert-success" role="alert">
                Ubah Password Berhasil!</div>');
                redirect('profile');
            }
            
        }else{ 
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
               Password Tidak Benar!</div>');
            echo "<script>
                alert('Password Tidak Benar!');
                  </script>";
            redirect('profile');
        }
    }

}
