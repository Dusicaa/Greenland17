<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class donacije extends Frontend_Controller{
    
    public function __construct() {
        parent::__construct();     
         $this->load->model('logovanje_model', 'login');  
      
    }
    public function index(){
        
         $data = array();
         $data['stranica']='Donacije';      
          $data['base_url']=base_url();
         $this->load_view('pages/donacije',$data);
    }
    public function login(){
        //logovanje
     
     $dugme = $this->input->get('btnLogovanje');
        if($dugme!="")
        {
            $user = $this->input->get('tbKorIme');
            $lozinka = md5($this->input->get('tbLozinka'));
            if($user == 'admin' && $lozinka==md5('admin'))
            {
                $this->session->set_userdata('username',$user);
                $this->session->set_userdata('ulogovan', true);
                $this->session->set_flashdata('ulogovan','Ulogovali ste se!');
                redirect('Admin');
            }
            else
            {$this->session->set_userdata('username',$user);
                $this->session->set_userdata('ulogovan', true);
                $this->session->set_flashdata('ulogovan','Ulogovali ste se!');
               
                redirect('Donacije/index/1');
            }
    }}
    public function logout()
    {
        // kod za odjavu
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('ulogovan');
        $this->session->sess_destroy();
        redirect();
    }
    
    public function registracija($tip = null){
      
        $is_post=$this->input->server('REQUEST_METHOD') == 'POST'; 
        $this->load->library('form_validation');
        
            $data = array();
             if($is_post) 
             {
                 $dugme = $this->input->post('btnRegistracija');
                 
                 if($dugme!="")
                 {
         $this->form_validation->set_message('required','%s is required to be entered.');          
            $this->form_validation->set_rules('tbKorIme', 'Username','trim|required|is_unique[korisnik.korisnicko_ime]|max_length[30]|alpha_dash', array('is_unique' => 'Username already in use.'));
            $this->form_validation->set_rules('tbLozinka', 'Password','trim|required|min_length[6]|max_length[30]|alpha_dash');
            $this->form_validation->set_rules('tbLozinkaPonovo', 'Confirm Password','trim|required|min_length[6]|max_length[30]|alpha_dash|matches[tbLozinka]');
            $this->form_validation->set_rules('tbEmail', 'Email','trim|required|valid_email|is_unique[korisnik.email]', array('is_unique' => 'Email already in use.'));
            
            if($this->form_validation->run())
            {
                
                $username = $this->input->post('tbKorIme');
                $password = $this->input->post('tbLozinka');
                $email = $this->input->post('tbEmail');
              
                $this->login->korisnicko_ime = $username;
                $this->login->lozinka = $password;
                $this->login->email = $email;
               $this->login->id_uloga = 2;
               $this->login->insert_data();
              
                $this->session->set_flashdata('registracija_uspesna','Registrovali ste se!');
                 $data['base_url']=base_url();
                
         $data['stranica']='Donacije'; 
              //$this->load->view('pages/donacije',$data);
            
            }
                 
                 $this->load->view('pages/donacije',$data);
                
            
       
                 }
         }
          
            }
    
    
   
}
    
 
        


