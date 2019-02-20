<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('voucher_m');
        $this->data['username'] = $this->session->userdata('username');
        $this->data['id_role']  = $this->session->userdata('id_role');
        if(!isset($this->data['username']) && $this->data['id_role'] != 2)
        {
            $this->session->unset_userdata('username');
            $this->session->unset_userdata('id_role');
            $this->session->unset_userdata('status');
            $this->flashmsg('<i class="fa fa-warning"></i> You must login first!', 'warning');
            redirect('login');
            exit;
        }
    }

    public function index()
    {
        $this->data['title'] ='Admin | ';
        $this->data['content'] = 'admin/main';
        $this->load->view('admin/template/template', $this->data);
    }

    public function generate() {
        if(isset($this->data['username'])) {
            $unique = md5(uniqid(rand(), true));
            $key = substr($unique, strlen($unique) - 10, strlen($unique));
            echo json_encode(array('key' => $key, 'status' => 'success'));
        } else {
            echo json_encode(array('status' => 'gagal'));
        }
    }

    public function saveKey()
    {
        if(isset($this->data['username'])) {
            $data = array(
                'id_voucher' => $this->POST('keys'),
                'jumlah' => $this->POST('jumlah'),
                'status' => 0
            );
            $this->voucher_m->insert($data);
            echo json_encode(array('status' => 'success'));
        } else {
            echo json_encode(array('status' => 'gagal'));
        }
    }

    public function key_data()
    {
        if(isset($this->data['username'])) {
            $data = $this->voucher_m->get();
            echo json_encode($data);
        } else {
            echo json_encode(array('status' => 'gagal'));
        }
    }

}

/* End of file Admin.php */
