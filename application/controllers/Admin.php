<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {
    
    public function __construct()
    {
        parent::__construct();
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

}

/* End of file Admin.php */
