<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->data['username'] = $this->session->userdata('username');
        $this->data['id_role']  = $this->session->userdata('id_role');
        echo $this->data['id_role'];
        if (isset($this->data['username'], $this->data['id_role']))
        {
            // $ipaddress = '';
            // if (getenv('HTTP_CLIENT_IP')) {
            //     $ipaddress = getenv('HTTP_CLIENT_IP');
            // } else if(getenv('HTTP_X_FORWARDED_FOR')) {
            //     $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
            // } else if(getenv('HTTP_X_FORWARDED')) {
            //     $ipaddress = getenv('HTTP_X_FORWARDED');
            // } else if(getenv('HTTP_FORWARDED_FOR')) {
            //     $ipaddress = getenv('HTTP_FORWARDED_FOR');
            // } else if(getenv('HTTP_FORWARDED')) {
            //     $ipaddress = getenv('HTTP_FORWARDED');
            // } else if(getenv('REMOTE_ADDR')) {
            //     $ipaddress = getenv('REMOTE_ADDR');
            // } else {
            //     $ipaddress = 'UNKNOWN';
            // }
            // $this->Log_m->insert(array('username' => $this->data['username'], 'ip_address' => $ipaddress, 'date' => mdate('%Y-%m-%d %H:%i:%s', now('Asia/Jakarta'))));
            switch ($this->data['id_role'])
            {
                case 3:
                    redirect('user');
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
        $this->data['title'] = 'Login | ';
        $this->load->view('login', $this->data);
    }

}
