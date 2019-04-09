<?php 

$this->load->view('panitia/template/title', $title);
$this->load->view('panitia/template/navbar');
$this->load->view('panitia/template/sidebar');
$this->load->view($content);
$this->load->view('panitia/template/footer');


?>