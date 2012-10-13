<?php
/*helps authenticate a user*/
class C_Auth extends MY_Controller {
	
	public function __construct() {
		parent::__construct();
	}
	
	public function index(){
		$this->load->model('m_zinc_ors_inventory');
		$this->m_zinc_ors_inventory->getFacilityCode();
	    if ($this->m_zinc_ors_inventory->isFacility=='true') {
	    	
			/*retrieve facility details*/
			
			
			
			/*create session data*/
			$newdata = array('mfName' => $this->m_zinc_ors_inventory->facility->getFacilityName());
            //var_dump($newdata); exit;
			$this -> session -> set_userdata($newdata);
	
			redirect(base_url() . 'c_front/inventory', 'refresh');

		} else {
			#use an ajax request and not a whole refresh
			$data['form'] = '<p>Facility Not Found!<p>';
			$this -> load -> view('index', $data);
		}
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
		redirect(base_url(), 'refresh');
		$this->session->sess_destroy();
	}
}
?>