<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyGuest extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->model("pgadmin"); 
            $this->load->library("session");       
            $this->load->library("email");  
            $this->load->helper('date');
                     
        }
         public function index() {
            
        }
        public function addGuest() {
            $data =  array();
            // check  for session  is available
            $user_id = $this->session->userdata('user_id');
	    
            if(!isset($user_id)):
                redirect('registration/pglogin');
               return TRUE; 
            endif;
            
            $this->load->view('pg_admin/addguest');
        }
        public function sendNotification() {
	    $company_dtl = $this->pgadmin->select_info('pg_company',array('user_id'=>$this->session->userdata('user_id')));	
	    $company_id = $company_dtl[0]['company_id'];
            $op =  array();
            $guest_name = $this->input->post('guest_name');
            $guest_email = $this->input->post('guest_email');
            $guest_mobile = $this->input->post('guest_mobile');
            $guest_doj = $this->input->post('guest_doj');
            $info_array =  array();
            foreach ($guest_name as $key => $value) {
                $info_array[$key]['pg_id']=1;
		$info_array[$key]['company_id'] = $company_id;
                $info_array[$key]['guest_name']=$value;
                $info_array[$key]['guest_email']=$guest_email[$key];
                $info_array[$key]['guest_mobile']=$guest_mobile[$key];
                $info_array[$key]['guest_doj']= date('Y-m-d',strtotime(str_replace(".", "-", $guest_doj[$key])));
                $info_array[$key]['entrycode']= rand(0,99999999);
		$info_array[$key]['status']= 0;
            }
            
            $insert_info = $this->pgadmin->insert_batch_record('pg_invitation',$info_array);
            $this->sendEmailInvitation($info_array); //  send email invitation
            $this->sendSMSInvitation($info_array); //  send email invitation
            
            if($insert_info){
                $op['status']="success";
                $op['status']="Invitation Send Sucessfully";
            } else {
                $op['status']="fail";
                $op['status']="Somthing went Wrong";
            }
            echo json_encode($op);            
        }
        function sendSMSInvitation($info_array) {
            $username=SMS_UNAME;
            $password=SMS_PWD;            
            $sender=SMS_SENDER; 
            
            foreach ($info_array as $key => $value) {
                $mobile_number=$value['guest_mobile'];
                $message="Hello ".$value['guest_name']."\n"." Your PG Owner sent you invitation to complete your profile.\n Email:".$value['guest_email']." Ver Code: ".$value['entrycode'];
                $url="login.bulksmsgateway.in/sendmessage.php?user=".urlencode($username)."&password=".urlencode($password)."&mobile=".urlencode($mobile_number)."&message=".urlencode($message)."&sender=".urlencode($sender)."&type=".urlencode('3');
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                $responce_data = curl_exec($ch);
                curl_close($ch);                 
                $json = json_decode($responce_data, true);
                 $user_id = $this->session->userdata('user_id');
                $sms_log[$key]['sender_uid'] = $user_id;
                $sms_log[$key]['mobilenumbers'] = $json['mobilenumbers'];
                $sms_log[$key]['refid'] = $json['refid'];
                $sms_log[$key]['senttime'] = $json['senttime'];
                $sms_log[$key]['type'] = "GUEST_INVIT";        
                $sms_log[$key]['status'] = $json['status'];
            }
			if(count($sms_log) > 0):
               $this->pgadmin->insert_batch_record('pg_sms_log',$sms_log);
           endif;
            
        }
        function sendEmailInvitation($info_array) {
            
            // send verification email
            $this->load->library('email');
            $config['mailtype'] = 'html';
            $config['smtp_port']=EMAIL_PORT;
            $config['smtp_timeout'] = 5;
            $config['charset']='utf-8'; // Default should be utf-8 (this should be a text field) 
            $config['newline']="\r\n"; //"\r\n" or "\n" or "\r". DEFAULT should be "\r\n" 
            $config['crlf'] = "\r\n"; //"\r\n" or "\n" or "\r" DEFAULT should be "\r\n" 

            $config['charset']='utf-8';
            $config['protocol'] = 'smtp';
            $config['smtp_crypto'] = 'tls';

            $config['smtp_host'] = EMAIL_SMTP_HOST;
            $config['smtp_user'] = EMAIL_FROM;
            $config['smtp_pass'] = EMAIL_PWD;

            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = TRUE;

            $this->email->initialize($config);
            $this->email->from(EMAIL_FROM, EMAIL_FROM_NAME);
            
            foreach ($info_array as $key => $value) {
                // link generation
            $msg= "entrycode=".$value['entrycode']."&email=".$value['guest_email'];            
            $encrypted_string = $this->encrypt->encode($msg, VERI_KEY);
            $verlink = base_url()."guestregister/guest_verify?rand=".$encrypted_string;                
                
                $path = 'JSON_DATA/email/1003.json';
		$email_msg = '';
		if(file_exists($path))
                {
                   $json_file = file_get_contents($path);
                   // convert the string to a json object
                   $jfo = json_decode($json_file);
                   $emailcode =  $jfo->template->email_code;
                   $email_name  = $jfo->template->name_en;
                   $email_subject =  $jfo->template->subject_en;                
                   $email_msg = str_replace(array("[GUESTNAME]","[VERIFY_URL]"), array($value['guest_name'], $verlink ), $jfo->template->body_en);
		}	
		
                $this->email->to($value['guest_email']);
                $this->email->subject('Hi '.$value['guest_name']); 
                $this->email->message($email_msg);			
                $this->email->set_newline("\r\n");
                $this->email->send() ;
                 
            }   
        }
	
	public function testmsg() {
         
          /*  $username=SMS_UNAME;
            $password=SMS_PWD;            
            $sender=SMS_SENDER; 
            $user_id = $this->session->userdata('user_id');
            $info_array[0]['guest_name']="pavan";
            $info_array[0]['guest_mobile']="9421019656";
            $info_array[0]['guest_email']="pvningalkar@gmail.com";
            $info_array[0]['entrycode']="888558";
            
            $info_array[1]['guest_name']="vallabh";
            $info_array[1]['guest_mobile']="9845713350";
            $info_array[1]['guest_email']="pvningalkar@gmail.com";
            $info_array[1]['entrycode']="888558";
            $sms_log = array();
            foreach ($info_array as $key => $value) {
                $mobile_number=$value['guest_mobile'];
                $message="Hello ".$value['guest_name']."\n"." Your PG Owner sent you invitation to complete your profile.\n Email:".$value['guest_email']." Ver Code: ".$value['entrycode'];
                $url="login.bulksmsgateway.in/sendmessage.php?user=".urlencode($username)."&password=".urlencode($password)."&mobile=".urlencode($mobile_number)."&message=".urlencode($message)."&sender=".urlencode($sender)."&type=".urlencode('3');
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                $responce_data = curl_exec($ch);
                curl_close($ch);                 
                $json = json_decode($responce_data, true);
                
                $sms_log[$key]['sender_uid'] = $user_id;
                $sms_log[$key]['mobilenumbers'] = $json['mobilenumbers'];
                $sms_log[$key]['refid'] = $json['refid'];
                $sms_log[$key]['senttime'] = $json['senttime'];
                $sms_log[$key]['type'] = "GUEST_INVIT";        
                $sms_log[$key]['status'] = $json['status'];
            }            
            
           if(count($sms_log) > 0):
               $this->pgadmin->insert_batch_record('pg_sms_log',$sms_log);
           endif; */
            
        }
}