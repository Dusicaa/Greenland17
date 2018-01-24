<?php

class Home extends Frontend_Controller{
    //put your code here
   
    public function __construct() {
        parent::__construct();
       $this->load->model('pocetna_model'); 
    }
    public function index(){
         $data['slider_slike']=$this->pocetna_model->slider_slike();
          $data['dohvati_vesti_limit']=$this->pocetna_model->dohvatiVestiPocetna();
        $data['stranica']='Pocetna';
     
    
      $this->load_view('pages/pocetna',$data);
    }
    
     public function download()
    {
        $this->load->helper('download');
         $this->load->helper('file');
         $data = file_get_contents("images/dokumentacija.pdf");
         $name = "fajl_preuzimanje.pdf";
         force_download($name,$data);
    }
}
