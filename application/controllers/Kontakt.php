<?php if(!defined('BASEPATH'))exit('No direct script access allowed');


class Kontakt extends Frontend_Controller{
   
    public function __construct() {
        parent::__construct();
   //$this->load->helper('form');
        $this->load->model('kontakt_model','kontakt');
    }
    public function index(){
         $this->load->library('form_validation');
          $data['poll'] = $this->kontakt->get_poll();
          //$this->load_view("pages/kontakt",$data);
        $data['stranica']='Kontakt';
        
        $data['tb_ime_kontakt'] = array(
              'name'        => 'tb_ime_kontakt',
              'id'          => 'tb_ime_kontakt',
	       'class'	    => 'kontakt',
              'maxlength'   => '100',
              'size'        =>'22'
            );
        $data['tb_email'] = array(
              'name'        => 'tb_email',
              'id'          => 'tb_email',
	       'class'	    => 'kontakt',
              'maxlength'   => '100',
               'size'       =>'22'
            );
        
        $data['ta_poruka'] = array(
              'name'        => 'ta_poruka',
              'id'          => 'ta_poruka',
	      'class'	    => 'kontakt',
              'maxlength'   => '100',
               'cols'       =>'25',
               'rows'       =>'10'
            );
	$data['btn_posalji_mejl'] = array(
              'name'        => 'btn_posalji_mejl',
              'id'          => 'btn_posalji_mejl',
	      'class'	    => 'kontakt',
	      'value'	    => 'Pošalji',
              'maxlength'   => '100'
            );  
        //prikupljanje podataka sa formulara 
        $dugme=$this->input->post('btn_posalji_mejl');
        if($dugme){
            
            $ime=$this->input->post('tb_ime_kontakt');
            $mejl=$this->input->post('tb_email');
            $poruka=$this->input->post('ta_poruka');
             $this->form_validation->set_rules('tb_email','E-mail','trim|required|valid_email');
             $this->form_validation->set_message('required','Poje %s je prazno.');
               $this->form_validation->set_message('valid_email','Poje %s je neispravno.');
               
                if($this->form_validation->run()){
                 //slanje mejla
                    $config=array(
                        'protocol'=>'smtp','smtp_host'=>'ssl://smtp.gmail.com',
                        'smtp_port'=>465,
                        'smtp_user'=>'$mojeIme','smtp_pass'=>'$mojaLozinka',//dodati lozinku
                        'mailtype'=>'html','charset'=>'utf-8'
                        
                    );
                              $this->load->library('email',$config);
                              $this->email->set_newline("\r\n");
                              $this->email->from('$mejl','$ime');
                              $this->email->to('dusicacakic@gmail.com');
                              
                              //omoguciti extension=php_openssl.dll
                              $this->email->subject('Kontakt sa sajta GREENLAND');
                              $this->email->message('<h2>$poruka</h2>');
                              //inicijalizaacija
                              $config['protocol'] = 'sendmail';
                              $config['mailpath'] = '/usr/sbin/sendmail';
                              $config['charset'] = 'iso-8859-1';
                               $config['wordwrap'] = TRUE;

$this->email->initialize($config);
                              if($this->email->send()){
                                  
                                  print $this->email->print_debugger();
                              }else{
                                   print $this->email->print_debugger();
                                  
                              }
                      }//kraj f-je
        
                }
        $data['base_url']= base_url();
        $this->load_view("pages/kontakt",$data);
        
        
    }
    //anketa
    
     public function poll_item()
	{           
		if($this->input->post('submit'))
		{
			if($this->session->userdata('voted') != 'true')
			{
				$this->kontakt->set_poll($this->input->post('answer'));
				redirect('Kontakt/poll_result');
			}
			else
			{
				$this->session->set_flashdata('message', 'You have already voted on this poll!');
				redirect('Kontakt');
			}			
		}
		else
		{
			$data['poll'] = $this->kontakt->get_poll();
			$this->load->vars($data);
			$this->load->view('pages/kontakt');		
		}
	}
	
	
	public function poll_result()
	{
		$data['poll'] = $this->kontakt->get_result();
		$this->load->vars($data);
		$this->load->view('poll_result');		
	}
	
	
  }
         