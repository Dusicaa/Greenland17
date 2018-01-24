<?php if(!defined('BASEPATH'))exit('No direct script access allowed');


class Admin extends Frontend_Controller{
   
    public function __construct() {
        parent::__construct();
       // $this->load->model('Grocery_crud_model','grocery_crud');//dodala
   //$this->load->helper('form');
    }
    public function index(){
      $data=array();
		
        $data['stranica']='Admin';
		
	  
      $tabele=  $this->db->list_tables();
      foreach ($tabele as $t) {
         $data['tabele'][]=  anchor('admin/upravljaj/'.$t, "Uredi tabelu \"".$t."\"");
      }
      
      //$views=array('admin/panel');
        $data['base_url']= base_url();
      $this->load_view('pages/admin/admin',$data);
        
        
    }
   public function upravljaj($tab) {
      
        $data['stranica']='Admin';
        $data['tabela']=$tab;
      /**
       * grocery CRUD
       */
      try {
         $this->load->library('grocery_CRUD');
           $this->grocery_crud->set_table($tab);
           $this->grocery_crud->unset_jquery();
           $output = $this->grocery_crud->render();
         $data['output']=$output->output;
         $data['skripteH']=array(
            script_tag($output->js_files)
         );
         foreach ($output->css_files as $css) {
         $data['cssH'][]=  link_tag($css);
         }
       
      } catch (Exception $ex) {
         $data['output']="Ne postoji tabela sa tim nazivom!";
         $data['greskeCRUD']=$ex->getMessage();
      }
      
      //$views=array('admin/upravljanje');
      $this->load->view('pages/admin/upravljanje',$data);
   }
  }
         