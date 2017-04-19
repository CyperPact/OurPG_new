<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->model("pgadmin"); 
//            $this->load->database();
            $this->load->library('form_validation');
            $this->load->library("session");       
            $this->load->library('encrypt'); 
                     
        }
	public function index()
	{
            $data = array();
            // check  for session  is available
            $user_id = $this->session->userdata('gust_user_id');
            $role_id = $this->session->userdata('role_id'); 
            if(!isset($user_id)):
                redirect('GuestLogin');
               return TRUE; 
            endif;
            
            
                // check if PG ADMIN have company details
                $company_dtl = $this->pgadmin->select_info('pg_company',array('user_id'=>$user_id));
                if($company_dtl == FALSE && $role_id == ROLE_PG_ADMIN):
                    $this->load->view('pg_admin/company_profile_first_visit',$data);
                    return TRUE;
                else:
                    $this->load->view('pg_guest/dashboard',$data);
                endif;
            
            
            
	}
        public function document() {
            $data= array();
            $this->load->view('pg_guest/documents',$data);
        }
        
	
	
	
}
