<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Galerija extends Frontend_Controller{
  
    public function __construct() {
        parent::__construct();     
           $this->load->model('galerija_model','galerija');    
          
    }
    private $limit=12;
    public function index(){
       // $data['galerija_slike']=$this->galerija->galerija_slike();
        $stranica='Galerija';
     $config['total_rows']=$this->galerija->count();
     $config['per_page']=$this->limit;
     $config['uri_segment']=3;
       $choice = $config["total_rows"] / $config["per_page"];
    $config["num_links"] = round($choice);
      $config['base_url']= base_url().'Galerija/index';
       
      $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
   $config['first_tag_open']="<li>";
   $config['first_tag_close']="</li>";
   $config['last_tag_open']="<li>";
   $config['last_tag_close']="</li>";
    //$config['num_links'] = 2;
    $config['use_page_numbers'] = TRUE;
    $config['page_query_string'] =FALSE;
     $config['enable_query_strings']=TRUE;
     //$config['query_string_segment'] = 'stranica';
    $config['prev_link'] = '&lt; Prev';
    $config['first_link'] = '&laquo';
    $config['last_link'] = '&raquo';
    $config['next_link'] = 'Next &gt;';  
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>'; 
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><a href="">';
    $config['cur_tag_close'] = '</a></li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    
  // $page = ($this->uri->segment(3))? $this->uri->segment(3) : 0;
      
    $this->pagination->initialize($config);   
    $query=$this->galerija->all($this->limit); 
    $page_links=$this->pagination->create_links();
    $this->load_view("pages/galerija",compact('query',"page_links",'stranica'));
    
    }
      

}
    

