<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MY_Controller {

    public function index()
    {
        $this->data['title'] ='Home | ';
        $this->data['content'] = 'main';
        $this->data['active'] = 0;
        $this->load->view('template/template', $this->data);
    }

}

/* End of file Main.php */
