<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Panitia extends MY_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('voucher_m');
            $this->data['username'] = $this->session->userdata('username');
            $this->data['id_role']  = $this->session->userdata('id_role');
            if(!isset($this->data['username']) || $this->data['id_role'] != 3)
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
            $this->data['title'] ='Panitia | ';
            $this->data['content'] = 'panitia/main';
            $this->data['active'] = 0;
            $this->data['penjualan'] = $this->voucher_m->get(array('status'=>1));
            $this->data['voucher'] = $this->voucher_m->get();

            $this->load->view('panitia/template/template', $this->data);
        }

        public function finalis()
        {
            $this->load->model('Data_finalis_m');
            $this->data['finalis'] = $this->Data_finalis_m->get();
            $this->data['content'] = 'panitia/finalis';
            $this->data['title'] = 'Panitia | Finalis';
            $this->data['active'] = 1;
            $this->load->view('panitia/template/template',$this->data);
        }

    }
?>