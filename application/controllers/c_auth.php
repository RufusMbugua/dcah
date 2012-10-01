<?php
/*helps authenticate a user*/
class C_Auth extends MY_Controller {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function index(){
		//print var_dump($this -> session -> userdata('allCounties')); exit;
		//if($this->doCheckFacilityCode()==false){
			//$this->requestMFC();
		//}else{
		//	redirect(base_url() . 'c_front/inventory', 'refresh');
		//}
		    //$data['form'] = '<p>MFC Code Required for Access!<p>';
			//$this -> load -> view('index', $data);
			redirect(base_url() . 'c_front/inventory', 'refresh');
	}



   public function doCheckFacilityCode(){/**from the session data*/
	if(!$this -> session -> userdata('mfc')){
		return true;
		//redirect(base_url() . 'c_front/inventory', 'refresh');
		}else{
			return false;
		// $this->requestMFC();
		}
		
		
	}
   
   private function requestMFC(){
   	        #use an ajax request and not a whole refresh
			$data['form'] = '<p>MFC Code Not Found!<p>';
			$this -> load -> view('index', $data);
   }
   
   
	
	public function logout(){
		$data['form'] = '<p>You need to login.<p>';
		$this -> load -> view('index', $data);
		$this->session->sess_destroy();
		redirect(base_url(), 'refresh');
	}
}?>