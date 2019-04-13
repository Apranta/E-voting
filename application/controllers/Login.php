<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends MY_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('log_m');
        $this->data['username'] = $this->session->userdata('username');
        $this->data['id_role']  = $this->session->userdata('id_role');
        echo $this->data['id_role'];
        if (isset($this->data['username'], $this->data['id_role']))
        {
            switch ($this->data['id_role'])
            {
                case 3:
                    redirect('panitia');
                    break;
                case 2:
                    redirect('admin');
                    break;
                case 1:
                    redirect('super');
                    break;
            }
            exit;
        }
    }
    public function index()
    {
        if($this->POST('username') && $this->POST('password')) {
            $this->load->model('admin_m');
            if($this->admin_m->cek_login(array('username' => $this->POST('username'), 'password' => $this->POST('password')))) {
                $this->log_m->insert(array('ip_address' => $this->get_ip(), 'waktu' => mdate('%Y-%m-%d %H:%i:%s', now('Asia/Jakarta'))));
                echo $this->session->userdata('id_role');
                if($this->session->userdata('id_role')==2){
                    redirect('Admin');
                    exit;
                }else if($this->session->userdata('id_role')==3){
                    redirect('Panitia');
                    exit;
                }
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Username/Password</strong> Salah<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('login');
                exit;
            }
        }
        $this->data['title'] = 'Login | ';
        $this->load->view('login', $this->data);
    }
    public function get_ip()
    {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';

        return $ipaddress;
    }
}