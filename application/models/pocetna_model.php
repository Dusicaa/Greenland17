<?php


class pocetna_model extends CI_Model{
 
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function slider_slike(){
        $this->db->select('*');
        $this->db->from('slike');
        $this->db->where('id_pripada','1');
        $query=  $this->db->get();
        return $query->result_array();
    }
    public function autor() {
        $this->db->select('*');
        $this->db->from('post');
        $this->db->where('id_pripada','6');
        $query=  $this->db->get();
        return $query->result_array();
    }
    public function autor_slika(){
         $this->db->select('*');
        $this->db->from('post p');
        $this->db->join('slike s','p.id_slike=s.id_slike');
       
        $this->db->where('p.id_pripada','6');
        $query=  $this->db->get();
        return $query->result_array();
        
    }
    public function dohvatiVestiPocetna($limit=3){
           $this->db->select('*');
        $this->db->from('post p');
        $this->db->join('slike s','p.id_slike=s.id_slike');
       
        $this->db->where('p.id_pripada','4');
         $this->db->order_by("datum", "desc"); 
        $query=  $this->db->limit($limit)->get();
        return $query->result_array();
        
        
    }
    
}
