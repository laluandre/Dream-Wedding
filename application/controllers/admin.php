<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        if($this->session->userdata('session') == 10){
        $this->load->view('bar/sidebar');
        $this->load->view('admin/index');
        $this->load->view('bar/admin_footer');
        }
        else {
            redirect('auth');
        }
    }

    public function user()
    {
        if($this->session->userdata('session') != 10){
            redirect('auth');
        }

        $this->load->model('User_models', 'user');

        $this->load->library('pagination');

        $config['base_url'] = "http://localhost/dppl/admin/user";
        $config['num_links'] = 3;
        $config['per_page'] = 10;
        $config['total_rows'] = $this->user->countAlluser();

        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');
        
        $this->pagination->initialize($config);

        $data['start']= $this->uri->segment(3);
        $data['user'] = $this->user->getuser($config['per_page'], $data['start']);
        $this->load->view('bar/sidebar');
        $this->load->view('admin/users', $data);
        $this->load->view('bar/admin_footer');
    }
    
    public function vendor()
    {
        if($this->session->userdata('session') != 10){
            redirect('auth');
        }
        
        $this->load->model('Vendor_models', 'vendor');

        $this->load->library('pagination');

        $config['base_url'] = "http://localhost/dppl/admin/vendor";
        $config['num_links'] = 3;
        $config['per_page'] = 10;
        $config['total_rows'] = $this->vendor->countAllvendor();

        $config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');
        
        $this->pagination->initialize($config);

        $data['start']= $this->uri->segment(3);
        $data['vendor'] = $this->vendor->getvendor($config['per_page'], $data['start']);

        $this->load->view('bar/sidebar', $data);
        $this->load->view('admin/vendor', $data);
        $this->load->view('bar/admin_footer');
    }

    public function edit_user($id_user='')
    {
        if($this->session->userdata('session') != 10){
            redirect('auth');
        }
        $data['user'] = $this->db->get_where('user', ['id_user' => $id_user])->row_array();

        $data['id'] = $data['user']['id_user'];
        $data['email'] = $data['user']['email_user'];
        $data['nama'] = $data['user']['nama_user'];
        $data['phone'] = $data['user']['phone_user'];

        $this->load->view('bar/sidebar',$data);
        $this->load->view('admin/edit_user',$data);
        $this->load->view('bar/admin_footer');
    }

    public function edit_vendor($id_vendor='')
    {
        if($this->session->userdata('session') != 10){
            redirect('auth');
        }
        $data['vendor'] = $this->db->get_where('vendor', ['id_vendor' => $id_vendor])->row_array();

        $data['id'] = $data['vendor']['id_vendor'];
        $data['email'] = $data['vendor']['email'];
        $data['nama'] = $data['vendor']['nama_vendor'];
        $data['phone'] = $data['vendor']['telpon_vendor'];

        $this->load->view('bar/sidebar',$data);
        $this->load->view('admin/edit_vendor',$data);
        $this->load->view('bar/admin_footer');
    }

    public function update_user($id='')
    {
        $nama = $this->input->post('nama');
        $phone = $this->input->post('phone');

        if($this->input->post('password')){
            $this->db->set('password', password_hash($this->input->post('password'), PASSWORD_DEFAULT));
        }

        $this->db->set('nama_user', $nama);
        $this->db->set('phone_user', $phone);
        $this->db->where('id_user', $id);
        $this->db->update('user');
        $this->session->set_flashdata('message_berhasil', '<div class="alert alert-success" role="alert">
               Edit Profile Berhasil!</div>');
        redirect('admin/edit_user/'.$id);
    }

    public function update_vendor($id='')
    {
        $nama = $this->input->post('nama');
        $phone = $this->input->post('phone');

        $this->db->set('nama_vendor', $nama);
        $this->db->set('telpon_vendor', $phone);
        $this->db->where('id_vendor', $id);
        $this->db->update('vendor');
        $this->session->set_flashdata('message_berhasil', '<div class="alert alert-success" role="alert">
               Edit Profile Berhasil!</div>');
        redirect('admin/edit_vendor/'.$id);
    }

    public function del_user($id='')
    {
        $data['user'] = $this->db->get_where('user', ['id_user' => $id])->row_array();
        $this->load->view('bar/sidebar');
        $this->load->view('admin/delete_user', $data);
        $this->load->view('bar/admin_footer');
    }

    public function del_vendor($id='')
    {
        $data['vendor'] = $this->db->get_where('vendor', ['id_vendor' => $id])->row_array();
        $this->load->view('bar/sidebar');
        $this->load->view('admin/delete_vendor', $data);
        $this->load->view('bar/admin_footer');
    }

    public function delete_user($id='')
    {
        $this->db->query('SET FOREIGN_KEY_CHECKS=0');
        $this->db->delete('rating', array('id_user' => $id));
        $this->db->delete('wishlist', array('id_user' => $id));
        $this->db->delete('history', array('id_user' => $id));
        $this->db->delete('user', array('id_user' => $id));
        $this->db->query('SET FOREIGN_KEY_CHECKS=1');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Hapus User Berhasil!</div>');
        redirect('admin/user');
    }

    public function delete_vendor($id='')
    {
        $this->db->query('SET FOREIGN_KEY_CHECKS=0');
        $this->db->delete('rating', array('id_vendor' => $id));
        $this->db->delete('wishlist', array('id_vendor' => $id));
        $this->db->delete('history', array('id_vendor' => $id));
        $this->db->delete('vendor', array('id_vendor' => $id));
        $this->db->query('SET FOREIGN_KEY_CHECKS=1');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Hapus Vendor Berhasil!</div>');
        redirect('admin/vendor');
    }

}