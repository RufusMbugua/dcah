<?php
class C_Front extends CI_Controller {
	var $data;

	public function __construct() {

		parent::__construct();
	    $this->data=array();

	}

	public function index() {
		//if($this -> session -> userdata('mfc')){
		$data['form'] = '<p>Your MFC Code is required.<p>';
		$this -> load -> view('index', $data); //landing page
	//	}else{
		//	$this->inventory();
		//}
		//dashboard
		
		//$this->inventory();
		//redirect(base_url() . 'c_auth/index', 'refresh');
		
	}//End of index file
	

	public function inventory() {
		
		$data['status']="";
		$data['response']="";
		$data['form'] = '<p class="error"><br/><br/>No form has been chosen<br/><br/><p>';
		$data['form_id']='';
		$this -> load -> view('pages/inventory/index', $data);
		
		//echo 'inventory';
	}

	public function formviewer() {
		$data['form'] = '<p class="error"><br/><br/>Refresh or click on "Inventory" menu item to continue<br/><br/><p>';
		$this -> load -> view('form', $data);
	}
	
	public function reports() {
		$data['status']="";
		$data['response']="";
		$data['form'] = '<p class="error"><br/><br/>No report has been chosen<br/><br/><p>';
		$data['form_id']='';
		$this -> load -> view('reports', $data);
		//echo 'Vehicles';
	}
	
}?>