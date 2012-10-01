<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
#processes form data before committing to the data-layer
class C_Form extends MY_Controller{
	
	public function __construct() {
		parent::__construct();
	}
	
	public function form_zinc_ors_inventory(){
		$this->load->model('M_Zinc_Ors_Inventory');
		$this->M_Zinc_Ors_Inventory->addRecord();
		
		if($this->M_Zinc_Ors_Inventory->response='ok'){
			//notify user of success
			$data['form_id']="";
			$data['form']='<p><b>Zinc Sulphate and ORS </b> data submitted successfully in 
			approximately <b>'.$this->M_Zinc_Ors_Inventory->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'c_front/vehicles/index', 'location');
			$this -> load -> view('pages/inventory/index', $data);
			
			
		}else{
			//notify user of error/failure
		}
		
	}//close form_zinc_ors_inventory()
}