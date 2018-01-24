<?php


class logovanje_model extends CI_Model {
     
    
    public $id;
    public $korisnicko_ime;
    public $password;
    public $email;       
    public $id_uloga;

    function __construct() {
      parent::__construct();
      $this->load->database(); //inicijalizuje konekciju sa bazom
    }

    function insert_data() {
      $data = array(
        'korisnicko_ime' => $this->korisnicko_ime,
        'lozinka' => $this->lozinka,
        'email' => $this->email,
       
        'id_uloga' => $this->id_uloga
      );
      $this->db->insert('korisnik', $data);
      //insert into uloga(implode(',',array_keys($podaci))) values(implode(',',$podaci))
    }

    
    function data() {
      $this->db->where('korisnicko_ime', $this->korisnicko_ime);
      return $this->db->get('korisnik')->result();
    }

        
 
   
}


