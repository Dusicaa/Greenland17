<?php


class meni extends Frontend_Controller {
 public function __construct() {
        parent::__construct();
       $this->load->model('pocetna_model'); 
    }
    public function index(){
        
       $this->load->helper('html');

      $this->load_view('template/header',$data);
    }
}
