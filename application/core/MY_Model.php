<?php
## Extend CI_Model to include Doctrine Entity Manager

class  MY_Model  extends  CI_Model{

public $em, $response, $theForm,$district,$county,$formRecords,$facilityExists;

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
	
	function facilityExists($mfc) {
        $s=microtime(true); /*mark the timestamp at the beginning of the transaction*/
		
		if ($this -> input -> post()) {//check if a post was made
			
       //Working with an object of the entity
		$user = $this->em->getRepository('models\Entities\e_systemuser')->findOneBy(array('username' => $this -> input -> post('username'), 'password' => $this -> input -> post('secret')));
	    
		
		
	    if($user){
	    	$this->email = $user -> getUsername();
			$this->userRights=$user->getUserRights();
			$this->affiliation=$user->getAffiliation();
			return $this->isUser='true';
	    }
		
		}//close the this->input->post
		$e=microtime(true);
		$this->executionTime=round($e-$s,'4');
		return $this -> isUser = 'true';
	} /*end of facilityExists()*/
	
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
	}/*end of getDistrictNames*/
	
	/*utilized in several models*/
	public function getDistrictName($id){
		try{
			$this->district=$this->em->getRepository('models\Entities\E_District')
			                       ->findOneBy( array('districtID'=>$id));
			}catch(exception $ex){
				//ignore
				//die($ex->getMessage());
			}
	}
	
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