<?php
## Extend CI_Controller to include Doctrine Entity Manager

class  MY_Controller  extends  CI_Controller  {

public $em, $response, $theForm, $rowsInserted, $executionTime,$data,$selectCommodityType,$facilities,
		$selectCounties,$selectDistricts,$selectFacilityType,$selectFacilityLevel;

function __construct()  {
		parent::__construct();
		
		/* Instantiate Doctrine's Entity manage so we don't have
		   to everytime we want to use Doctrine */
		   
		$this->em = $this->doctrine->em;
		$this->response='';
		$this->theForm='';
		$this->data='';
		$this->selectCounties=$this->selectDistricts=$selectFacilityType=$selectFacilityLevel='';
		$this->getCountyNames();
		$this->getDisctrictNames();
	}

	function  getRepositoryByFormName($form){
		$this->the_form=$this->em->getRepository($form);
		return $this->theForm;
	}
	
	public function getDisctrictNames(){/*obtained from the session data*/
		      // if($this -> session -> userdata('allDistricts'))
		      $this->load->model('m_zinc_ors_inventory');
			  $this->m_zinc_ors_inventory->retrieveMFLInformation();
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
			  $this->m_zinc_ors_inventory->retrieveMFLInformation();
			 
			 
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
	
	public function getFacilityTypes(){/*obtained from the session data*/
		      // if($this -> session -> userdata('allCounties'))
		      $this->load->model('m_zinc_ors_inventory');
			  $this->m_zinc_ors_inventory->retrieveMFLInformation();
			 
			 
			  $fType_array=array('allFacilityTypes'=>$this->m_zinc_ors_inventory->dbSessionValues[2]);
			  $this -> session -> set_userdata($fType_array);
			  if($this -> session -> userdata('allFacilityTypes') )
			//  print var_dump($this -> session -> userdata('allFacilityTypes'));exit;
				foreach($this -> session -> userdata('allFacilityTypes') as $key=>$value){
				 $this->selectFacilityType.= '<option value="'.$value['facilityTypeID'].'">'.$value['facilityType'].'</option>'.'<br />';
				}
				
				//var_dump($this -> session -> userdata('allFacilityTypes')); exit;
				return $this->selectFacilityType;
			
		}

	public function getFacilityLevels(){/*obtained from the session data*/
		      // if($this -> session -> userdata('allCounties'))
		      $this->load->model('m_zinc_ors_inventory');
			  $this->m_zinc_ors_inventory->retrieveMFLInformation();
			 
			 
			  $fLevel_array=array('allFacilityLevels'=>$this->m_zinc_ors_inventory->dbSessionValues[3]);
			  $this -> session -> set_userdata($fLevel_array);
			  if($this -> session -> userdata('allFacilityLevels'))
			// print var_dump($this -> session -> userdata('allCounties'));exit;
				foreach($this -> session -> userdata('allFacilityLevels') as $key=>$value){
				 $this->selectFacilityLevel.= '<option value="'.$value['facilityLevelID'].'">'.$value['facilityLevel'].'</option>'.'<br />';
				}
				
				//var_dump($this -> session -> userdata('allFacilityLevels')); exit;
				return $this->selectFacilityLevel;
			
		}

	

	
}  