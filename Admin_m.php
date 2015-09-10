<?php

class Admin_m extends CI_Model{ 



	function select($table){
        $this->db->select();
        $this->db->from($table);
        $this->db->order_by('id','DESC');
        $this->db->query('SET SQL_BIG_SELECTS=1'); 
        $query = $this->db->get();
        $query = $query->result_array();  
        return $query;
    } 


    function insert($data,$table){
        $this->db->insert($table,$data);        
        return $this->db->insert_id();
    }
    
    function delete($id,$table){
        $this->db->delete($table, array('id' => $id));
        return;
    }





}