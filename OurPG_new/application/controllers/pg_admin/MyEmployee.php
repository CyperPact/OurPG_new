<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyEmployee extends CI_Controller {
        public function __construct(){
            parent::__construct();
		}
	public function index() {
		
            $this->load->view('pg_admin/viewemployee');
        }
}