<?php
defined('BASEPATH') or exit('No direct script access allowed');

$data['stat'] = 0;

class auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('pagination');
    }

    public function index()
    {
        $this->session->unset_userdata('kategori');
        $data['user'] = $this->db->get_where('user', ['email_user' => $this->session->userdata('email')])->row_array();
        $data['vendor'] = $this->db->get_where('vendor', ['email' => $this->session->userdata('email')])->row_array();

        if ($this->session->userdata('session') == NULL) {
            $data['title'] = 'Login';
            $data['link'] = '';
            $data['class'] = 'icon-sign-in mr-2';
            $data['toggle'] = 'modal';
        } else if($this->session->userdata('session') == 1){
            $data['title'] = $data['user']['nama_user'];
            $data['link'] = 'profile';
            $data['class'] = 'icon-user';
            $data['toggle'] = '';
        }else if($this->session->userdata('session') == 2){
            $data['title'] = $data['vendor']['nama_vendor'];
            $data['link'] = 'profilev';
            $data['class'] = 'icon-user';
            $data['toggle'] = '';
        }else if($this->session->userdata('session') == 10){
            $data['title'] = 'Admin';
            $data['link'] = 'admin';
            $data['class'] = 'icon-user';
            $data['toggle'] = '';
        }
        
        $this->load->view('bar/header', $data);
        $this->load->view('auth/home', $data);
        $this->load->view('bar/footer', $data);
    }

    public function cek_login()
    {
        $this->_login();
    }

    public function cek_loginv()
    {
        $this->_loginv();
    }

    public function registration()
    {
        $data['user'] = $this->db->get_where('user', ['email_user' => $this->session->userdata('email')])->row_array();
        $data['vendor'] = $this->db->get_where('vendor', ['email' => $this->session->userdata('email')])->row_array();
        
        $password = $this->input->post('rpassword1');
        $password2 = $this->input->post('rpassword2');

        if($password == $password2){
        $data = [
            'id_user' => '',
            'nama_user' => $this->input->post('rname'),
            'email_user' => $this->input->post('remail'),
            'phone_user' => $this->input->post('rtelp'),
            'password' => password_hash($this->input->post('rpassword1'), PASSWORD_DEFAULT),
            'profile' => 'user.png',
            'role' => 2,
        ];
        
        $this->db->insert('user', $data);
        $data = [
            'id' => $data['id_user'],
            'nama' => $data['nama_user'],
            'email' => $data['email_user'],
            'role' => $data['role'],
            'notif' => $data['nama_user'],
            'class' => 'icon-user',
            'target' => 'sign',
            'session' => 1
        ];
        $this->session->set_userdata($data);
        redirect('auth/klik_login');
        }else{
            echo "<script>
                alert('Password dont match!');
                  </script>";
            redirect('auth');
        }

    }

    private function _loginv()
    {
        $email = $this->input->post('vemail');
        $password = $this->input->post('vpassword');

        $user = $this->db->get_where('vendor', ['email' => $email])->row_array();

        if ($user) {
            if (password_verify($password, $user['password_vendor'])) {
                $data = [
                    'nama' => $user['nama_vendor'],
                    'email' => $user['email'],
                    'notif' => $user['nama_vendor'],
                    'class' => 'icon-user',
                    'target' => 'sign',
                    'session' => 2
                ];
                
                $this->session->set_userdata($data);
                redirect('profilev');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Wrong Username/Password!</div>');
                echo "<script>
                        alert('Wrong Username/Password');
                        window.location = ''
                      </script>";
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email is not registered!</div>');
            redirect('auth');
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email_user' => $email])->row_array();

        if ($user) {

            if (password_verify($password, $user['password'])) {
                
                if ($user['role'] == 2) {
                    $data = [
                        'id' => $user['id_user'],
                        'nama' => $user['nama_user'],
                        'email' => $user['email_user'],
                        'role' => $user['role'],
                        'notif' => $user['nama_user'],
                        'class' => 'icon-user',
                        'target' => 'sign',
                        'session' => 1
                    ];
    
                    $this->session->set_userdata($data);
                    redirect('profile');
                }
                else{
                    $data = [
                        'id' => $user['id_user'],
                        'nama' => $user['nama_user'],
                        'email' => $user['email_user'],
                        'role' => $user['role'],
                        'notif' => $user['nama_user'],
                        'class' => 'icon-user',
                        'target' => 'sign',
                        'session' => 10
                    ];

                    $this->session->set_userdata($data);
                    redirect('admin');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Invalid email or password!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Invalid email or password!</div>');
            redirect('auth');
        }
    }

    public function recommendation()
    {
        $this->session->unset_userdata('kategori');
        $data['user'] = $this->db->get_where('user', ['email_user' => $this->session->userdata('email')])->row_array();
        $data['vendor'] = $this->db->get_where('vendor', ['email' => $this->session->userdata('email')])->row_array();

        if ($this->session->userdata('session') == NULL) {
            $data['title'] = 'Login';
            $data['link'] = '';
            $data['class'] = 'icon-sign-in mr-2';
            $data['toggle'] = 'modal';
        } else if($this->session->userdata('session') == 1){
            $data['title'] = $data['user']['nama_user'];
            $data['link'] = 'profile';
            $data['class'] = 'icon-user';
            $data['toggle'] = '';
        }else if($this->session->userdata('session') == 2){
            $data['title'] = $data['vendor']['nama_vendor'];
            $data['link'] = 'profilev';
            $data['class'] = 'icon-user';
            $data['toggle'] = '';
        }else if($this->session->userdata('session') == 10){
            $data['title'] = 'Admin';
            $data['link'] = 'admin';
            $data['class'] = 'icon-user';
            $data['toggle'] = '';
        }

        $this->load->model('Vendor_models', 'vendor');

        $config['base_url'] = "http://localhost/dppl/auth/recommendation";
        $config['total_rows'] = $this->vendor->countAllvendor();
        $config['per_page'] = 6;
        $config['num_links'] = 3;

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

        $this->load->view('bar/header', $data);
        $this->load->view('auth/recommendation', $data);
        $this->load->view('bar/footer');
    }

    public function registv()
    {
        $this->session->unset_userdata('kategori');
        $data['user'] = $this->db->get_where('user', ['email_user' => $this->session->userdata('email')])->row_array();

        if ($data['user'] == NULL) {
            $data['title'] = 'Login';
            $data['link'] = '';
            $data['class'] = 'icon-sign-in mr-2';
            $data['toggle'] = 'modal';
        } else {
            $data['title'] = $data['user']['nama_user'];
            $data['link'] = 'profile';
            $data['class'] = 'icon-user';
            $data['toggle'] = '';
        }

        $this->load->view('bar/header', $data);
        $this->load->view('auth/registv');
        $this->load->view('bar/footer');
    }

    public function registvendor()
    {
        if($this->input->post('password1') != $this->input->post('password2')){
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Password tidak cocok!</div>');
            redirect('auth/registv');
        }else{
            $data = [
                'nama_vendor' => $this->input->post('nama_vendor'),
                'email' => $this->input->post('email_vendor'),
                'telpon_vendor' => $this->input->post('telp_vendor'),
                'lokasi_vendor' => $this->input->post('lokasi'),
                'password_vendor' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'deskripsi_vendor' => $this->input->post('deskripsi'),
                'profil_vendor' => 'vendor.png',
                'kategori_vendor' => $this->input->post('category'),
                'harga_vendor' => $this->input->post('price'),
            ];
            
            $this->db->insert('vendor', $data);

            $data = [
                'nama' => $data['nama_vendor'],
                'email' => $data['email'],
                'notif' => $data['nama_vendor'],
                'class' => 'icon-user',
                'target' => 'sign',
                'session' => 2
            ];

            $this->session->set_userdata($data);
            redirect('auth/klik_login');
        }
    }

    public function promo()
    {
        $this->session->unset_userdata('kategori');
        $data['user'] = $this->db->get_where('user', ['email_user' => $this->session->userdata('email')])->row_array();
        $data['vendor'] = $this->db->get_where('vendor', ['email' => $this->session->userdata('email')])->row_array();

        if ($this->session->userdata('session') == NULL) {
            $data['title'] = 'Login';
            $data['link'] = '';
            $data['class'] = 'icon-sign-in mr-2';
            $data['toggle'] = 'modal';
        } else if($this->session->userdata('session') == 1){
            $data['title'] = $data['user']['nama_user'];
            $data['link'] = 'profile';
            $data['class'] = 'icon-user';
            $data['toggle'] = '';
        }else if($this->session->userdata('session') == 2){
            $data['title'] = $data['vendor']['nama_vendor'];
            $data['link'] = 'profilev';
            $data['class'] = 'icon-user';
            $data['toggle'] = '';
        }else if($this->session->userdata('session') == 10){
            $data['title'] = 'Admin';
            $data['link'] = 'admin';
            $data['class'] = 'icon-user';
            $data['toggle'] = '';
        }
        $this->load->view('bar/header', $data);
        $this->load->view('auth/promo');
        $this->load->view('bar/footer');
    }

    public function info()
    {
        $this->session->unset_userdata('kategori');
        $data['user'] = $this->db->get_where('user', ['email_user' => $this->session->userdata('email')])->row_array();
        $data['vendor'] = $this->db->get_where('vendor', ['email' => $this->session->userdata('email')])->row_array();

        if ($this->session->userdata('session') == NULL) {
            $data['title'] = 'Login';
            $data['link'] = '';
            $data['class'] = 'icon-sign-in mr-2';
            $data['toggle'] = 'modal';
        } else if($this->session->userdata('session') == 1){
            $data['title'] = $data['user']['nama_user'];
            $data['link'] = 'profile';
            $data['class'] = 'icon-user';
            $data['toggle'] = '';
        }else if($this->session->userdata('session') == 2){
            $data['title'] = $data['vendor']['nama_vendor'];
            $data['link'] = 'profilev';
            $data['class'] = 'icon-user';
            $data['toggle'] = '';
        }else if($this->session->userdata('session') == 10){
            $data['title'] = 'Admin';
            $data['link'] = 'admin';
            $data['class'] = 'icon-user';
            $data['toggle'] = '';
        }

        $this->load->view('bar/header', $data);
        $this->load->view('auth/info');
        $this->load->view('bar/footer');
    }


    public function help()
    {
        $this->session->unset_userdata('kategori');
        $data['user'] = $this->db->get_where('user', ['email_user' => $this->session->userdata('email')])->row_array();
        $data['vendor'] = $this->db->get_where('vendor', ['email' => $this->session->userdata('email')])->row_array();

        if ($this->session->userdata('session') == NULL) {
            $data['title'] = 'Login';
            $data['link'] = '';
            $data['class'] = 'icon-sign-in mr-2';
            $data['toggle'] = 'modal';
        } else if($this->session->userdata('session') == 1){
            $data['title'] = $data['user']['nama_user'];
            $data['link'] = 'profile';
            $data['class'] = 'icon-user';
            $data['toggle'] = '';
        }else if($this->session->userdata('session') == 2){
            $data['title'] = $data['vendor']['nama_vendor'];
            $data['link'] = 'profilev';
            $data['class'] = 'icon-user';
            $data['toggle'] = '';
        }else if($this->session->userdata('session') == 10){
            $data['title'] = 'Admin';
            $data['link'] = 'admin';
            $data['class'] = 'icon-user';
            $data['toggle'] = '';
        }

        $this->load->view('bar/header', $data);
        $this->load->view('auth/help');
        $this->load->view('bar/footer');
    }

    public function vendor()
    {
        
        $data['user'] = $this->db->get_where('user', ['email_user' => $this->session->userdata('email')])->row_array();
        $data['vendor'] = $this->db->get_where('vendor', ['email' => $this->session->userdata('email')])->row_array();

        if ($this->session->userdata('session') == NULL) {
            $data['title'] = 'Login';
            $data['link'] = '';
            $data['class'] = 'icon-sign-in mr-2';
            $data['toggle'] = 'modal';
        } else if($this->session->userdata('session') == 1){
            $data['title'] = $data['user']['nama_user'];
            $data['link'] = 'profile';
            $data['class'] = 'icon-user';
            $data['toggle'] = '';
        } else if($this->session->userdata('session') == 2){
            $data['title'] = $data['vendor']['nama_vendor'];
            $data['link'] = 'profilev';
            $data['class'] = 'icon-user';
            $data['toggle'] = '';
        }else if($this->session->userdata('session') == 10){
            $data['title'] = 'Admin';
            $data['link'] = 'admin';
            $data['class'] = 'icon-user';
            $data['toggle'] = '';
        }

        $this->load->model('Vendor_models', 'vendor');

        $this->load->library('pagination');

        $config['base_url'] = "http://localhost/dppl/auth/vendor";
        $config['num_links'] = 3;

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

        if($this->input->post('cari'))
        {
            $data['kategori'] = $this->input->post('kategori');
            $data['lokasi'] = $this->input->post('lokasi');
            
            $this->session->set_userdata('kategori',$data['kategori']);
            $this->session->set_userdata('lokasi',$data['lokasi']);
        }
        else{
            $data['kategori'] = $this->session->userdata('kategori');
            $data['lokasi'] = $this->session->userdata('lokasi');
        }

        $this->db->like('kategori_vendor', $data['kategori']);
        $this->db->like('lokasi_vendor', $data['lokasi']);
        $this->db->from('vendor');
        $config['total_rows'] = $this->db->count_all_results();
        $config['per_page'] = 6;
        
        $this->pagination->initialize($config);

        $data['start']= $this->uri->segment(3);
        $data['vendor'] = $this->vendor->getvendor($config['per_page'], $data['start'], $data['kategori'], $data['lokasi']);

        $this->load->view('bar/header', $data);
        $this->load->view('auth/vendor', $data);
        $this->load->view('bar/footer');
    }

    public function vendorpage($vendor_id='')
    {
        $this->session->unset_userdata('kategori');

        $data['user'] = $this->db->get_where('user', ['email_user' => $this->session->userdata('email')])->row_array();
        $data['vendor'] = $this->db->get_where('vendor', ['id_vendor' => $vendor_id])->row_array();
        $data['history'] = $this->db->get_where('history', ['id_user' => $data['user']['id_user']])->row_array();
        $data['id'] = $data['user']['id_user'];

        if ($data['user'] == NULL) {
            redirect('auth/notif_login');
        } else if($this->db->get_where('history', ['id_user' => $data['id']])){
            $data['title'] = $data['user']['nama_user'];
            $data['nama'] = $data['vendor']['nama_vendor'];
            $data['profil'] = $data['vendor']['profil_vendor'];
            $data['lokasi'] = $data['vendor']['lokasi_vendor'];
            $data['kategori'] = $data['vendor']['kategori_vendor'];
            $data['link'] = 'profile';
            $data['class'] = 'icon-user';
            $data['toggle'] = '';

            $history = [
                'id_user' => $data['user']['id_user'],
                'id_vendor' => $data['vendor']['id_vendor'],
                'date_time' => time()
            ];
            
            if($this->db->get_where('history', ['id_user' => $data['user']['id_user']])->num_rows() > 0){
                $this->db->set($history);
                $this->db->where('id_user', $data['history']['id_user']);
                $this->db->update('history');
            }else {
                $this->db->set($history);
                $this->db->insert('history');
            }
        }

        else{
            $data['title'] = $data['user']['nama_user'];
            $data['nama'] = $data['vendor']['nama_vendor'];
            $data['profil'] = $data['vendor']['profil_vendor'];
            $data['lokasi'] = $data['vendor']['lokasi_vendor'];
            $data['kategori'] = $data['vendor']['kategori_vendor'];
            $data['link'] = 'profile';
            $data['class'] = 'icon-user';
            $data['toggle'] = '';

            $history = [
                'id_user' => $data['user']['id_user'],
                'id_vendor' => $data['vendor']['id_vendor'],
                'date_time' => time()
            ];
            
            $this->db->set($history);
            $this->db->insert('history');
        }

        $this->load->view('bar/header', $data);
        $this->load->view('auth/vendorpage', $data, $vendor_id);
        $this->load->view('bar/footer');
    }

    public function storyandtips()
    {
        $this->session->unset_userdata('kategori');
        $data['user'] = $this->db->get_where('user', ['email_user' => $this->session->userdata('email')])->row_array();
        $data['vendor'] = $this->db->get_where('vendor', ['email' => $this->session->userdata('email')])->row_array();

        if ($this->session->userdata('session') == NULL) {
            $data['title'] = 'Login';
            $data['link'] = '';
            $data['class'] = 'icon-sign-in mr-2';
            $data['toggle'] = 'modal';
        } else if($this->session->userdata('session') == 1){
            $data['title'] = $data['user']['nama_user'];
            $data['link'] = 'profile';
            $data['class'] = 'icon-user';
            $data['toggle'] = '';
        }else if($this->session->userdata('session') == 2){
            $data['title'] = $data['vendor']['nama_vendor'];
            $data['link'] = 'profilev';
            $data['class'] = 'icon-user';
            $data['toggle'] = '';
        }else if($this->session->userdata('session') == 10){
            $data['title'] = 'Admin';
            $data['link'] = 'admin';
            $data['class'] = 'icon-user';
            $data['toggle'] = '';
        }

        $this->load->view('bar/header', $data);
        $this->load->view('auth/storyandtips');
        $this->load->view('bar/footer');
    }

    public function klik_login()
    {
        $data['user'] = $this->db->get_where('user', ['email_user' => $this->session->userdata('email')])->row_array();
        $data['vendor'] = $this->db->get_where('vendor', ['email' => $this->session->userdata('email')])->row_array();
        

        if ($this->session->userdata('session') == NULL) {
            $data['title'] = 'Login';
            $data['link'] = '';
            $data['class'] = 'icon-sign-in mr-2';
            $data['toggle'] = 'modal';
        } else if($this->session->userdata('session') == 1){
            redirect('auth');
        }else if($this->session->userdata('session') == 2){
            redirect('auth');
        }

        $this->load->view('bar/header', $data);
        $this->load->view('auth/login_klik');
        $this->load->view('bar/footer');
    }
    
    public function notif_login()
    {
        $data['user'] = $this->db->get_where('user', ['email_user' => $this->session->userdata('email')])->row_array();
        $data['vendor'] = $this->db->get_where('vendor', ['email' => $this->session->userdata('email')])->row_array();
        

        if ($this->session->userdata('session') == NULL) {
            $data['title'] = 'Login';
            $data['link'] = '';
            $data['class'] = 'icon-sign-in mr-2';
            $data['toggle'] = 'modal';
        } else if($this->session->userdata('session') == 1){
            redirect('auth');
        }else if($this->session->userdata('session') == 2){
            redirect('auth');
        }

        $this->load->view('bar/header', $data);
        $this->load->view('auth/login_notif');
        $this->load->view('bar/footer');
    }

    public function klik_wish($id_vendor='')
    {
        $this->session->unset_userdata('kategori');

        $data['user'] = $this->db->get_where('user', ['email_user' => $this->session->userdata('email')])->row_array();
        $data['vendor'] = $this->db->get_where('vendor', ['id_vendor' => $id_vendor])->row_array();
        
        if ($data['user'] == NULL) {
            redirect('auth/notif_login');
        }

        $wish = [
            'id_vendor' => $id_vendor,
            'id_user' => $data['user']['id_user']
        ];
        $this->db->set($wish);
        $this->db->insert('wishlist', $wish);
        redirect('auth/vendor');

    }

    public function klik_rating($id='')
    {
        $this->session->unset_userdata('kategori');
        $data['user'] = $this->db->get_where('user', ['email_user' => $this->session->userdata('email')])->row_array();
        $data['vendor'] = $this->db->get_where('vendor', ['id_vendor' => $id])->row_array();

        if ($data['user'] == NULL) {
            redirect('auth/notif_login');
        } 
        if($this->session->userdata('session') == 1){
            $data['title'] = $data['user']['nama_user'];
            $data['link'] = 'profile';
            $data['class'] = 'icon-user';
            $data['toggle'] = '';
        }else if($this->session->userdata('session') == 2){
            $data['title'] = $data['vendor']['nama_vendor'];
            $data['link'] = 'profilev';
            $data['class'] = 'icon-user';
            $data['toggle'] = '';
        }else if($this->session->userdata('session') == 10){
            $data['title'] = 'Admin';
            $data['link'] = 'admin';
            $data['class'] = 'icon-user';
            $data['toggle'] = '';
        }

        $this->load->view('bar/header', $data);
        $this->load->view('auth/rating', $data);
        $this->load->view('bar/footer');
    }

    public function gen_rate($id_vendor='')
    {
        $data['user'] = $this->db->get_where('user', ['email_user' => $this->session->userdata('email')])->row_array();
        $rate = $this->input->post('rate');
        $this->db->set('nilai', $rate);
        $this->db->set('id_user', $data['user']['id_user']);
        $this->db->set('id_vendor', $id_vendor);
        $this->db->insert('rating');
        redirect('auth/vendor');
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('session');  

        redirect('auth');
    }

}
