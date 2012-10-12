<?php
## Extend CI_Controller to include Doctrine Entity Manager

class  MY_Controller  extends  CI_Controller  {

public $em, $response, $theForm, $rowsInserted, $executionTime,$data,$selectCommodityType,$facilities,$selectCounties,$selectDistricts;

function __construct()  {
		parent::__construct();
		
		/* Instantiate Doctrine's Entity manage so we don't have
		   to everytime we want to use Doctrine */
		   
		$this->em = $this->doctrine->em;
		$this->response='';
		$this->theForm='';
		$this->data='';
		$this->selectCounties='';$this->selectDistricts='';
		$this->getCountyNames();
		$this->getDisctrictNames();
	}

	function  getRepositoryByFormName($form){
		$this->the_form=$this->em->getRepository($form);
		return $this->theForm;
	}
	
	/*public function getDisctrictNames(){obtained from the session data
		       if($this -> session -> userdata('allDistricts'))
				foreach($this -> session -> userdata('allDistricts') as $key=>$value){
				 $this->selectDistricts.= '<option value="'.$value['districtID'].'">'.$value['districtName'].'</option>'.'<br />';
				}
				
				//var_dump($this -> session -> userdata('allDistricts')); exit;
				return $this->selectDistricts;
			
		}*/
	
	/*public function getCountyNames(){obtained from the session data
		       if($this -> session -> userdata('allCounties'))
				foreach($this -> session -> userdata('allCounties') as $key=>$value){
				$this->selectCounties.= '<option value="'.$value['countyID'].'">'.$value['countyName'].'</option>'.'<br />';
				}
				
				return $this->selectCounties;
			
		}*/
	
	public function getDisctrictNames(){/*obtained from the session data*/
		      // if($this -> session -> userdata('allDistricts'))
		      $this->load->model('m_zinc_ors_inventory');
			  $this->m_zinc_ors_inventory->retrieveCountyAndDistrictNames();
			  $districtName_array=array('allDistricts'=>$this->m_zinc_ors_inventory->dbSessionValues[0]);
			  $this -> session -> set_userdata($districtName_array);
			  if($this -> session -> userdata('allDistricts') )
			//  print var_dump($this -> session -> userdata('allDistricts'));exit;
				foreach($this -> session -> userdata('allDistricts') as $key=>$value){
				 $this->selectDistricts.= '<option value="'.$value['districtID'].'">'.$value['districtName'].'</option>'.'<br />';
				}
				
				//var_dump($this -> session -> userdata('allDistricts')); exit;
				return $this->selectDistricts;
			
		}

    public function getCountyNames(){/*obtained from the session data*/
		      // if($this -> session -> userdata('allCounties'))
		      $this->load->model('m_zinc_ors_inventory');
			  $this->m_zinc_ors_inventory->retrieveCountyAndDistrictNames();
			  $this->m_zinc_ors_inventory->getMFCEntered();
			  
			 $sess_data=array('mfc'=>$this->m_zinc_ors_inventory->mfcCode);
		     $this -> session -> set_userdata($sess_data);
			 
			  $countyName_array=array('allCounties'=>$this->m_zinc_ors_inventory->dbSessionValues[1]);
			  $this -> session -> set_userdata($countyName_array);
			  if($this -> session -> userdata('allCounties') )
			//  print var_dump($this -> session -> userdata('allCounties'));exit;
				foreach($this -> session -> userdata('allCounties') as $key=>$value){
				 $this->selectCounties.= '<option value="'.$value['countyID'].'">'.$value['countyName'].'</option>'.'<br />';
				}
				
				//var_dump($this -> session -> userdata('allCounties')); exit;
				return $this->selectCounties;
			
		}

	
}  