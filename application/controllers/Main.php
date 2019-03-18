<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MY_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_finalis_m');
    }
    

    public function index()
    {
        $this->data['bujang'] = $this->Data_finalis_m->get(array('jk' => 1));
        $this->data['gadis'] = $this->Data_finalis_m->get(array('jk' => 2));
        $this->data['title'] ='Home | ';
        $this->data['content'] = 'main';
        $this->data['active'] = 0;
        $this->load->view('template/template', $this->data);
    }

}

/* End of file Main.php */
