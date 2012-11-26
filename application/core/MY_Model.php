<?php
## Extend CI_Model to include Doctrine Entity Manager

class  MY_Model  extends  CI_Model{

public $em, $response, $theForm,$district,$county,$province,$owner,$level,$type,$formRecords,$facilityExists,$commodity,$facility;

function __construct() {
		parent::__construct();
		
		/* Instantiate Doctrine's Entity manage so we don't have
		   to everytime we want to use Doctrine */
		   
		$this->em = $this->doctrine->em;
		$this->response='';
		$this->theForm='';
		$this->facilityExists=false;
	}

   /*utilized in several models*/
	public function getFacilityName($id){
		try{
			$this->centre=$this->em->getRepository('models\Entities\E_Facility')
			                       ->findOneBy( array('facilityMFC'=>$id));
			}catch(exception $ex){
				//ignore
				//die($ex->getMessage());
			}
	}
	
	
	function getAllDistrictNames(){
		 /*using DQL*/
		 try{
	      $query = $this->em->createQuery('SELECT d.districtID,d.districtName FROM models\Entities\e_district d ORDER BY d.districtName ASC');
          $this->district = $query->getResult();
		  //die(var_dump($this->district));
		 }catch(exception $ex){
		 	//ignore
		 	//$ex->getMessage();
		 }
		return $this->district;
	}/*end of getDistrictNames*/
	
	function getAllCountyNames(){
		 /*using DQL*/
		 try{
	      $query = $this->em->createQuery('SELECT c.countyID,c.countyName FROM models\Entities\e_county c ORDER BY c.countyName ASC');
          $this->county = $query->getResult();
          }catch(exception $ex){
          	//$ex->getMessage();
          	
          }
		return $this->county;
	}/*end of getAllCountyNames*/
	
	function getAllProvinceNames(){
		 /*using DQL*/
		 try{
	      $query = $this->em->createQuery('SELECT p.provinceID, p.provinceName FROM models\Entities\e_province p ORDER BY p.provinceName ASC');
          $this->province = $query->getResult();
		  //die(var_dump($this->level));
		 }catch(exception $ex){
		 	//ignore
		 	//$ex->getMessage();//exit;
		 }
		return $this->province;
	}/*end of getAllProvinceNames*/
	
	function getAllFacilityOwnerNames(){
		 /*using DQL*/
		 try{
	      $query = $this->em->createQuery('SELECT o.facilityOwnerID, o.facilityOwner FROM models\Entities\e_facility_owner o ORDER BY o.facilityOwner ASC');
          $this->owner = $query->getResult();
		  //die(var_dump($this->level));
		 }catch(exception $ex){
		 	//ignore
		 	//$ex->getMessage();//exit;
		 }
		return $this->owner;
	}/*end of getAllFacilityOwnerNames*/
	
	function getAllFacilityTypes(){
		 /*using DQL*/
		 try{
	      $query = $this->em->createQuery('SELECT t.facilityTypeID,t.facilityType FROM models\Entities\e_facility_type t ORDER BY t.facilityType ASC');
          $this->type = $query->getResult();
		  //die(var_dump($this->type));
		 }catch(exception $ex){
		 	//ignore
		 	//$ex->getMessage();//exit;
		 }
		return $this->type;
	}/*end of getAllFacilityTypes*/
	
	function getAllFacilityLevels(){
		 /*using DQL*/
		 try{
	      $query = $this->em->createQuery('SELECT l.facilityLevelID,l.facilityLevel FROM models\Entities\e_facility_level l ORDER BY l.facilityLevel ASC');
          $this->level = $query->getResult();
		  //die(var_dump($this->level));
		 }catch(exception $ex){
		 	//ignore
		 	//$ex->getMessage();//exit;
		 }
		return $this->level;
	}/*end of getAllFacilityLevels*/
	
	
	/*utilized in several models*/
	public function getDistrictName($id){
		try{
			$this->district=$this->em->getRepository('models\Entities\E_District')
			                       ->findOneBy( array('districtID'=>$id));
			}catch(exception $ex){
				//ignore
				//die($ex->getMessage());
			}
	}//end of getDistrictName
	
	
	/*utilized in several models*/
	public function getCountyName($id){
		try{
			$this->county=$this->em->getRepository('models\Entities\E_County')
			                       ->findOneBy( array('countyID'=>$id));
			}catch(exception $ex){
				//ignore
				//die($ex->getMessage());
			}
	}
	
	/*utilized in several models*/
	public function getLevelName($id){
		try{
			$this->level=$this->em->getRepository('models\Entities\e_facility_level')
			                       ->findOneBy( array('facilityLevelID'=>$id));
			}catch(exception $ex){
				//ignore
				//die($ex->getMessage());
			}
	}
	
	/*utilized in several models*/
	public function getProvinceName($id){
		try{
			$this->province=$this->em->getRepository('models\Entities\e_province')
			                       ->findOneBy( array('provinceID'=>$id));
			}catch(exception $ex){
				//ignore
				//die($ex->getMessage());
			}
	}
	
	//check if facility name exists
   public function facilityExists($mfc){
	     try{
			$this->facility=$this->em->getRepository('models\Entities\E_Facility')
			                       ->findOneBy( array('facilityName'=>$mfc));
			$this->facilityExists=true;
			}catch(exception $ex){
				//ignore
				//die($ex->getMessage());
			}
			return $this->facility;
		
	}/*close facilityExists($mfc)*/
	
	//checks if commodity name exists
	 public function commodityExists($cName){
	     try{
			$this->commodity=$this->em->getRepository('models\Entities\E_Commodity')
			                       ->findOneBy( array('commodityName'=>$cName));
			}catch(exception $ex){
				//ignore
				//die($ex->getMessage());
			}
			return $this->commodity;
		
	}/*close commodityExists($cName)*/
	
	/*used in m_mnh_assessment & m_zinc_ors_inventory*/
	protected function updateFacilityInfo(){
			foreach ($this -> input -> post() as $key => $val) {//For every posted values
		   
		  
		    if(substr($key,0,3)=="fac"){//select data for facilities
			     $this->attr = $key;//the attribute name
				 if (!empty($val)) {
					//We then store the value of this attribute for this element.
					// $this->elements[$this->id][$this->attr]=htmlentities($val);
					$this->elements[$this->attr]=htmlentities($val);
				   }else{
				   	$this->elements[$this->attr]='';
				   }
				   
			 }
			
			// print $key.' val='.$val.' <br />';
			
			 }//close foreach ($this -> input -> post() as $key => $val)
			 
			// exit;
			
			//check if facility exists
			$this->facility=$this->facilityExists($this -> session -> userdata('fName'));
			
		   //get county name,district name,level name by id
			$this->getCountyName($this->input->post('facilityCounty'));/*method defined in MY_Model*/
			$this->getDistrictName($this->input->post('facilityDistrict'));/*method defined in MY_Model*/
			$this->getLevelName($this->input->post('facilityLevel'));/*method defined in MY_Model*/
			$this->getProvinceName($this->input->post('facilityProvince'));/*method defined in MY_Model*/
			
		    //get the highest value of the array that will control the number of inserts to be done
						$this->noOfInsertsBatch=1; /*only 1 facility record is expected*/
						 
						// print "max rows: ".$this->noOfInsertsBatch; exit;
						 for($i=1; $i<=$this->noOfInsertsBatch;++$i){
			 	
				//insert facility if new, else update the existing one
				if($this->facilityExists!=true){
					//die('New entry, enter new one');
			   $this -> theForm = new \models\Entities\E_Facility(); //create an object of the model
			   $this -> theForm -> setCreatedAt(new DateTime()); /*timestamp option*/
			   $this -> theForm -> setFacilityName($this->input->post('facilityName',TRUE));
			   $this -> theForm -> setFacilityMFC($this -> session -> userdata('fCode'));//obtain facility code from current session
				}else{
				//$this -> theForm = new \models\Entities\E_Facility(); //create an object of the model
				//die('Duplicate entry, so update');
				try{
					$this -> theForm=$this->em->getRepository('models\Entities\E_Facility')
					                       ->findOneBy( array('facilityName'=>$this -> session -> userdata('fName')));
					}catch(exception $ex){
						//ignore
						die($ex->getMessage());
					}	
				}
		      
			 	
				$this -> theForm -> setUpdatedAt(new DateTime()); /*timestamp option*/
				
				$this -> theForm -> setFacilityDistrict($this->district->getDistrictName());
				$this -> theForm -> setFacilityLevel($this->level->getFacilityLevel());
				$this -> theForm -> setFacilityProvince($this->province->getProvinceName());
				$this -> theForm -> setFacilityCounty($this->county->getCountyName());
				$this -> theForm -> setFacilityContactPerson($this->input->post('facilityContactPerson',TRUE));
				if($this->input->post('facilityAltTelephone') !=''){
				$this -> theForm -> setFacilityTelephone($this->input->post('facilityTelephone',TRUE).'/'.$this->input->post('facilityAltTelephone',TRUE));
				}else{
				$this -> theForm -> setFacilityTelephone($this->input->post('facilityTelephone',TRUE));	
				}
				$this -> theForm -> setFacilityEmail($this->input->post('facilityEmail',TRUE));
				
				$this -> theForm -> setFacilityContactPerson($this->input->post('facilityContactPerson',TRUE));
				if($this->input->post('facilityAltTelephone') !=''){
				$this -> theForm -> setFacilityTelephone($this->input->post('facilityTelephone',TRUE).'/'.$this->input->post('facilityAltTelephone',TRUE));
				}else{
				$this -> theForm -> setFacilityTelephone($this->input->post('facilityTelephone',TRUE));	
				}
				$this -> theForm -> setFacilityEmail($this->input->post('facilityEmail',TRUE));
				$this -> em -> persist($this -> theForm);
                
				try{
					
				$this -> em -> flush();
				$this->em->clear(); //detaches all objects from doctrine
				}catch(Exception $ex){
				    die($ex->getMessage());
					/*display user friendly message*/
					
				}//end of catch

        	
				
					 } //end of innner loop
					 
	} //close updateFacilityInfo
	
	
}