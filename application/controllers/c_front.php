<?php
class C_Front extends CI_Controller {
	var $data;

	public function __construct() {

		parent::__construct();
	    $this->data=array();

	}

	public function index() {
		if(!$this -> session -> userdata('fCode')){
			
		$data['form'] = '<p>Your MFL Name/Code is required.<p>';
		$this -> load -> view('index', $data); //landing page
	    }else{
			$this->inventory();
		}
		//dashboard
		
		//$this->inventory();
		//redirect(base_url() . 'c_auth/index', 'refresh');
		
	}//End of index file
	

	public function inventory() {
		//print 'sess val: '.var_dump($this->session->all_userdata()); die;
		if($this -> session -> userdata('fCode')){
		$data['status']="";
		$data['response']="";
		$data['form'] = '<p class="error"><br/><br/>No form has been chosen<br/><br/><p>';
		$data['form_id']='';
		$this -> load -> view('pages/inventory/index', $data);
		}else{
			redirect(base_url() . 'c_front', 'refresh');
		}
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
	
}