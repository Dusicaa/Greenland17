<?php

class vesti_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function dohvatiVesti(){
           $this->db->select('*');
        $this->db->from('post p');
        $this->db->join('slike s','p.id_slike=s.id_slike');
       
        $this->db->where('p.id_pripada','4');
       $this->db->order_by("datum", "desc"); 
        $query=  $this->db->get();
        return $query->result_array();
        
        
    }
     
}
