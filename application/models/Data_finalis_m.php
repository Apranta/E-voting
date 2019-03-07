<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_finalis_m extends MY_Model {

    public function __construct()
    {
        parent::__construct();
        $this->data['table_name'] = 'data_finalis';
        $this->data['primary_key'] = 'id_finalis';
    }
    

}

/* End of file Log_m.php */
