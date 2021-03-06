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
	function select_employee_profile($cond)
        {
            $this->db->select('cpe.pg_company_id,
                cpe.my_pg_id,
                cpe.emp_id,
                mpg.company_employee_id,
                mpg.company_id,
                mpg.emp_fname,
                mpg.emp_lname,
                mpg.emp_fname,
                mpg.profile_pic,
                mpg.emp_email,
                mpg.emp_mobile,
                mpg.emp_emg_no,
                mpg.emp_permanent_add,
                mpg.emp_present_add,
                mpg.emp_aadhar_number,
                mpg.role,
                up.profile_id,
                up.first_name AS first_name_up,
                up.last_name AS last_name_up,
                up.profile_pic AS profile_pic_up,
                up.mobile_no AS mobile_no_up,
                up.adharno AS adharno_up,
                up.adress AS adress_up,
                up.area AS area_up,
                up.city AS city_up,
                up.state AS state_up,
                up.pincode AS pincode_up');
            $this->db->from(" company_pg_employee AS cpe");
            $this->db->join(" pg_employee AS mpg","cpe.emp_id = mpg.emp_id","left");
            $this->db->join(" user_profile AS up","mpg.user_id = up.user_id","left");            
            if(!empty($cond)){ foreach ($cond as $key => $value)$this->db->where($key,$value); } 
            $query = $this->db->get();    
        
           
            return ($query->num_rows() > 0)?$query->result_array():FALSE;
        }
	function select_company_employee($cond =  array())
        {
            $this->db->select('*');
            $this->db->from(" company_pg_employee AS cpe");
            $this->db->join(" my_pgs AS mpg","cpe.my_pg_id = mpg.mypg_id","left");
            $this->db->join(" pg_employee AS pge","cpe.emp_id = pge.emp_id","left");            
            if(!empty($cond)){ foreach ($cond as $key => $value)$this->db->where($key,$value); } 
            $query = $this->db->get();    
        
           
            return ($query->num_rows() > 0)?$query->result_array():FALSE;
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
		//$this->output->enable_profiler(TRUE);
        return $this->db->count_all_results($table);
    }
	
	
	/**
     * Generate a random password. 
     * 
     * get_random_password() will return a random password with length 6-8 of lowercase letters only.
     *
     * @access    public
     * @param    $chars_min the minimum length of password (optional, default 6)
     * @param    $chars_max the maximum length of password (optional, default 8)
     * @param    $use_upper_case boolean use upper case for letters, means stronger password (optional, default false)
     * @param    $include_numbers boolean include numbers, means stronger password (optional, default false)
     * @param    $include_special_chars include special characters, means stronger password (optional, default false)
     *
     * @return    string containing a random password 
     */    
    function get_random_password($chars_min=6, $chars_max=8, $use_upper_case=false, $include_numbers=false, $include_special_chars=false)
    {
        $length = rand($chars_min, $chars_max);
        $selection = 'aeuoyibcdfghjklmnpqrstvwxz';
        if($include_numbers) {
            $selection .= "1234567890";
        }
        if($include_special_chars) {
            $selection .= "!@\"#$%&[]{}?|";
        }
                                
        $password = "";
        for($i=0; $i<$length; $i++) {
            $current_letter = $use_upper_case ? (rand(0,1) ? strtoupper($selection[(rand() % strlen($selection))]) : $selection[(rand() % strlen($selection))]) : $selection[(rand() % strlen($selection))];            
            $password .=  $current_letter;
        }                
        
      return $password;
    }
    
}
