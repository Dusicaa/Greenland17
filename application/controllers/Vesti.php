<?php

class Vesti extends Frontend_Controller{
   
    public function __construct() {
        parent::__construct();
    $this->load->model('vesti_model');
    }
    public function index(){
        $data['dohvati_vesti']=$this->vesti_model->dohvatiVesti();
        $data['stranica']='Vesti';
   
       
        $this->load_view("pages/vesti",$data);
    }
}
