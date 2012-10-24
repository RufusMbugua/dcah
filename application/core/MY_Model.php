<?php
## Extend CI_Model to include Doctrine Entity Manager

class  MY_Model  extends  CI_Model{

public $em, $response, $theForm,$district,$county,$province,$owner,$level,$type,$formRecords,$facilityExists;

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
	
	
}