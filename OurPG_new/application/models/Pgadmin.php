<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author pavaningalkar
 */
class Pgadmin extends CI_Model{
    //put your code here
    function __construct()
        {
             // Call the Model constructor
             parent::__construct();
             
        }
    function select_last_record($table_name,$order_by,$order)
        {
            $this->db->select('*');
            $this->db->from($table_name);
            $this->db->order_by($order_by,$order);
            $this->db->limit(1);
            
            $query = $this->db->get();    
        
           
            return ($query->num_rows() > 0)?$query->result_array():FALSE;
        }
    function select_info($table_name,$cond = array(),$order = array(),$page=0,$perpage=0)
        {
			if($perpage):
				$page = $page-1;
				if ($page<0) { 
					$page = 0;
				}
				$from = $page*$perpage;
				$this->db->limit($perpage, $from);
			endif;
		
			
            $this->db->select('*');
            $this->db->from($table_name);
            if(!empty($cond)){ foreach ($cond as $key => $value)$this->db->where($key,$value); } 
            if(!empty($order)){ foreach ($order as $key => $value)$this->db->order_by($key,$value); } 
            $query = $this->db->get();        
            return ($query->num_rows() > 0)?$query->result_array():FALSE;
        }
		
	function select_column($selectdata,$table_name,$cond = array(),$order = array()){
			$this->db->select($selectdata);
            $this->db->from($table_name);
            if(!empty($cond)){ foreach ($cond as $key => $value)$this->db->where($key,$value); } 
            if(!empty($order)){ foreach ($order as $key => $value)$this->db->order_by($key,$value); } 
            $query = $this->db->get();        
            return ($query->num_rows() > 0)?$query->result_array():FALSE;
		
	}
	
	function select_last_row($table_name,$order_by_id,$cond = array()){
		 $this->db->select('*');
		  $this->db->order_by($order_by_id, 'DESC');  
		  $this->db->from($table_name);
		  $this->db->limit('1');
		  if(!empty($cond)){ foreach ($cond as $key => $value)$this->db->where($key,$value); } 
		  $query = $this->db->get();
		  return ($query->num_rows() > 0)?$query->result_array():FALSE;	
	}
    function insert_info($table_name,$data)
        {
            $this->db->insert($table_name, $data);
            return $this->db->insert_id();
        }
    function update_info($tbl_name,$data_array,$cond)
    {        
        if(!empty($cond)){
            foreach ($cond as $key => $value) {
            $this->db->where($key,$value);
            }
        }
        $this->db->update($tbl_name,$data_array);
        return $this->db->affected_rows();
    }
    function insert_batch_record($table_name,$data)
    {
        $this->db->insert_batch($table_name, $data);
        return $this->db->insert_id();
    }
	function delete_info($table_name,$cond){
		
		if(!empty($cond)){
            foreach ($cond as $key => $value) {
            $this->db->where($key,$value);
            }
        }
		$this->db->delete($table_name);
		//$this->output->enable_profiler(TRUE);
		return $this->db->affected_rows();
	}
	
	// Record count of table
	 public function record_count($table,$cond) {
		if(!empty($cond)){
            foreach ($cond as $key => $value) {
            $this->db->where($key,$value);
            }
        }
        return $this->db->count_all_results($table);
    }
    
}
