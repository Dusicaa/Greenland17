<?php

class Autor extends Frontend_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
         $this->load->model('pocetna_model'); 
    }
    
     public function index(){
         $data['autor']=$this->pocetna_model->autor();
         $data['autor_slika']=$this->pocetna_model->autor_slika();
        $data['stranica']='O autoru';
     
    
      $this->load_view('pages/autor',$data);
    }
}
