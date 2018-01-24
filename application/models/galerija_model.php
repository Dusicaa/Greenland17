<?php


class galerija_model extends CI_Model{
  
    private $table="slike";
     public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function all($limit=12) {
        $offset=$this->uri->segment(3);
        $this->db->select('*');
        //$this->db->from('slike');
        $this->db->where('id_pripada','2');
      
        return $this->db->limit($limit,$offset)->get($this->table);
        
    }
    public function count(){
        
       return $this->db->count_all_results($this->table);
    }
}
