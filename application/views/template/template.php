<?php 

$this->load->view('title', $title);
$this->load->view('navbar');
$this->load->view('sidebar');
$this->load->view($content);
$this->load->view('footer');


?>