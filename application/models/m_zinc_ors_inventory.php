<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 *model to E_Stock,E_Equipment_Assessment & E_OrtC_Assessment entities
 */
use application\models\Entities\E_Equipment_Assessment;
use application\models\Entities\E_OrtC_Assessment;
use application\models\Entities\E_Stock;

class M_Zinc_Ors_Inventory  extends MY_Model {
	var $id, $attr, $frags, $elements, $noOfInserts, $batchSize,$countyList,$districtList,$mfcCode,$dbSessionValues,
	$facility,$commodity,$pref,$the_equip_Ids,$equip_elements,$the_ort_Ids,$ort_elements,$the_ors_Ids,$ors_elements,$z_elements,$the_z_Ids,$f_elements,$the_f_Ids;

	function __construct() {
		parent::__construct();
		
	}

	function addRecord() {
        $s=microtime(true); /*mark the timestamp at the beginning of the transaction*/
		
		if ($this -> input -> post()) {//check if a post was made
		
			$this->elements = array();
			$this->theIds=array();
			foreach ($this -> input -> post() as $key => $val) {//For every posted values
		  // print(($key." ".$val)).'<br \>';
			   
			//check if posted value is among the cloned ones   
			if(!strpos("_",$key)){//useful to keep all the  non-cloned elements in the loop
				 $this->id = 1;  // the id
				 $this->attr = $key;//the attribute name
			 }else{
			 	//we separate the attribute name from the number
					
					 $this->frags = explode("_", $key);
				   
				    $this->id = $this->frags[1];  // the id
				    
				  
				   $this->attr = $this->frags[0];//the attribute name
			 	
			 }
			 
			
			  		
				   
				    //collect elements by the prefix to persist in the respective tuples
			 
			 if(strpos($key,'zn')==0){
			 	$this->pref='zn';
				 //print $this->pref.'<br />'; 
			 }
			 
			 if(strpos($key,'ors')==0){
			 	$this->pref='ors';
				 // print $this->pref.'<br />';
			 }
			 
			 if(strpos($key,'ort')==0){
			 	$this->pref='ort';
				  //print $this->pref.'<br />';
			 }
			 
			 if(strpos($key,'equip')==0){
			 	$this->pref='equip';
				 //print $this->pref.'<br />'; 
			 }
			
			 
			 switch($this->pref){
			 	case 'facility':
				   $this->the_f_Ids[$this->attr]=$this->id;
				  // print 'Enter facility....<br />';
			      // print($this->attr."  ".$this->id."  ".$val).'<br />';
				  //  print 'Exit facility....<br />';
				   
				   if (!empty($val)) {
					//We then store the value of this attribute for this element.
					// $this->elements[$this->id][$this->attr]=htmlentities($val);
					$this->f_elements[$this->id][$this->attr]=htmlentities($val);
				   }//else{
				   	//$this->elements[$this->attr]='';
				  // }
					break;
				case 'zn':
					$this->the_z_Ids[$this->attr]=$this->id;
					// print 'Enter zn....<br />';
			       print($this->attr."  ".$this->id."  ".$val).'<br />';
				   
				   if (!empty($val)) {
					//We then store the value of this attribute for this element.
					// $this->elements[$this->id][$this->attr]=htmlentities($val);
					$this->z_elements[$this->id][$this->attr]=htmlentities($val);
				   }//else{
				   	//$this->elements[$this->attr]='';
				  // }
					break;
				case 'ors':
					$this->the_ors_Ids[$this->attr]=$this->id;
			       //print($this->attr."  ".$this->id."  ".$val).'<br />';
				   
				   if (!empty($val)) {
					//We then store the value of this attribute for this element.
					// $this->elements[$this->id][$this->attr]=htmlentities($val);
					$this->ors_elements[$this->id][$this->attr]=htmlentities($val);
				   }//else{
				   	//$this->elements[$this->attr]='';
				  // }
					break;
				case 'ort':
					$this->the_ort_Ids[$this->attr]=$this->id;
			       //print($this->attr."  ".$this->id."  ".$val).'<br />';
				   
				   if (!empty($val)) {
					//We then store the value of this attribute for this element.
					// $this->elements[$this->id][$this->attr]=htmlentities($val);
					$this->ort_elements[$this->id][$this->attr]=htmlentities($val);
				   }else{
				   	$this->ort_elements[$this->attr]='';
				   }
					break;
				case 'equip':
					$this->the_equip_Ids[$this->attr]=$this->id;
			      // print($this->attr."  ".$this->id."  ".$val).'<br />';
				   
				   if (!empty($val)) {
					//We then store the value of this attribute for this element.
					// $this->elements[$this->id][$this->attr]=htmlentities($val);
					$this->equip_elements[$this->id][$this->attr]=htmlentities($val);
				   }else{
				   	$this->equip_elements[$this->attr]='';
				   }
					break;
			 }
				   
				 
					
			} //close foreach($_POST)
			
			exit;
			
			//simple loop to insert data into the 3 tuples
			for($t=0;$t<5;$t++){
				switch($t){
					case 0: //insert facility details
						$this->addFacilityInfo();
						break;
					case 1: //insert ORT assessment info
				
				      	$this->addORTInfo();
					 
					 	break;
					case 2: //insert equipment assesstment info
				
						$this->addEquipmentAssessmentInfo();
						break;
					case 3: //insert zn commodities
			
			          	$this->addZincCommoditiesInfo();
			
						break;
				
					case 4: //insert ORS commodities
			
			         $this->addORSCommoditiesInfo();
			
						break;
				
				}//close the switch($t)
					
			}//close the loop to insert data into the 3 tuples
			
			
			}//close the this->input->post
			
			
			
			$e=microtime(true);
			$this->executionTime=round($e-$s,'4');
	        $this->rowsInserted=$this->noOfInsertsBatch;
			return $this -> response = 'ok';
	} //end of addRecord()

   
   
   //methods required 1. to check if supplied facility name exists
   // 2. If facility name exists, 1. skip the facility insert but update* the facility info supplied 2. insert into the others
   //*For now, just update but later on, try to autosuggest and remind user of a need to update contact info
   
   //check if facility name exists
   

   public function facilityExists($mfc){
	     try{
			$this->facility=$this->em->getRepository('models\Entities\E_Facility')
			                       ->findOneBy( array('facilityName'=>$mfc));
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
	
	private function addFacilityInfo(){
			foreach ($this -> input -> post() as $key => $val) {//For every posted values
		   
		    if(strpos($key,'facility')==0){//select data for facilities
			 	$this->pref='facility';
				 
				print $this->pref.'<br />'; 
				 
			 }
			
			 }//close foreach ($this -> input -> post() as $key => $val)
			
		   //get county name,district name by id
			$this->getCountyName($this->input->post('facilityCounty'));/*method defined in MY_Model*/
			$this->getDistrictName($this->input->post('facilityDistrict'));/*method defined in MY_Model*/
			
		    //get the highest value of the array that will control the number of inserts to be done
						$this->noOfInsertsBatch=max($this->the_f_Ids);
						 
						 print "max rows: ".$this->noOfInsertsBatch; exit;
						 for($i=1; $i<=$this->noOfInsertsBatch;++$i){
			 	
				//insert facility if new, else update the existing one
			   $this -> theForm = new \models\Entities\E_Facility(); //create an object of the model
		      
			 	
				$this -> theForm -> setCreatedAt(new DateTime()); /*timestamp option*/
				//$this -> theForm -> setDates($this->elements[$i]['visitDate']);;/*entry option*/
				$this -> theForm -> setFacilityName($this->input->post('facilityName'));
				$this -> theForm -> setFacilityMFC($this->input->post('facilityMFC').'1');
				$this -> theForm -> setFacilityDistrict($this->district->getDistrictName());
				$this -> theForm -> setFacilityCounty($this->county->getCountyName());
				$this -> theForm -> setFacilityContactPerson($this->input->post('facilityContactPerson'));
				$this -> theForm -> setZincOrsDispensedFrom($this->input->post('facilityZincOrsDispensedFrom'));
				$this -> theForm -> setFacilityEmail($this->input->post('facilityEmail'));
				$this -> em -> persist($this -> theForm);
                
				try{
					
				$this -> em -> flush();
				$this->em->clear(); //detaches all objects from doctrine
				}catch(Exception $ex){
				    die($ex->getMessage());
					/*display user friendly message*/
					
				}//end of catch

        	
				
					 } //end of innner loop
					 
	} //close addFacilityInfo
	
	private function addORTInfo(){
		//get the highest value of the array that will control the number of inserts to be done
						$this->noOfInsertsBatch=max($this->the_ort_Ids);
						 
						 
						 for($i=1; $i<=$this->noOfInsertsBatch;++$i){
			 	
				//insert facility if new, else update the existing one
			   $this -> theForm = new \models\Entities\E_OrtC_Assessment(); //create an object of the model
		      
			 	
				$this -> theForm -> setCreatedAt(new DateTime()); /*timestamp option*/
				$this -> theForm -> setFacilityMFC($this->input->post('facilityMFC'));
				$this -> theForm -> setQuestion1($this->input->post('ortQuestion1'));
				$this -> theForm -> setQuestion2($this->input->post('ortQuestion2'));
				$this -> theForm -> setLocationOfDehydrationUnit($this->ort_elements[$i]['ortDehydrationLocation']);
				$this -> theForm -> setDateOfAssessment($this->input->post('facilityDateOfInventory'));
				$this -> em -> persist($this -> theForm);
						
						//now do a batched insert, default at 5
			  $this->batchSize=5;
			if($i % $this->batchSize==0){
			try{
					
				$this -> em -> flush();
				$this->em->clear(); //detaches all objects from doctrine
				}catch(Exception $ex){
				    die($ex->getMessage());
					/*display user friendly message*/
					
				}//end of catch
				
			} else if($i<$this->batchSize || $i>$this->batchSize || $i==$this->noOfInsertsBatch && 
			$this->noOfInsertsBatch-$i<$this->batchSize){
				 //total records less than a batch, insert all of them
				try{
					
				$this -> em -> flush();
				$this->em->clear(); //detactes all objects from doctrine
				}catch(Exception $ex){
					//die($ex->getMessage());
					/*display user friendly message*/
					
				}//end of catch
				 
				
			}//end of batch condition
					 } //end of innner loop	
	}//close addORTInfo
	
	private function addEquipmentAssessmentInfo(){
		
		
		//get the highest value of the array that will control the number of inserts to be done
						$this->noOfInsertsBatch=max($this->the_equip_Ids);
						 
						 
						 for($i=1; $i<=$this->noOfInsertsBatch;++$i){
			 	
				//insert facility if new, else update the existing one
			   $this -> theForm = new \models\Entities\E_Equipment_Assessment(); //create an object of the model
			   
		       //return the id of the last ORT assessment insert to use it in this subsequent equipment assessment
			 	
				$this -> theForm -> setCreatedAt(new DateTime()); /*timestamp option*/
				$this -> theForm -> setEquipmentCode($this->equip_elements[$i]['equipCode']);
				$this -> theForm -> setOrtCode($this->ortAssessment->getOrtAssessmentCode);
				$this -> theForm -> setEquipmentAvailable($this->equip_elements[$i]['equipAvailable']);
				$this -> theForm -> setQuantity($this->equip_elements[$i]['equipQuantity']);
				$this -> theForm -> setSupplierName($this->equip_elements[$i]['equipSupplier']);
				$this -> theForm -> setBudgetKept($this->equip_elements[$i]['equipBudgetPresent']);
				$this -> em -> persist($this -> theForm);
						
						//now do a batched insert, default at 5
			  $this->batchSize=5;
			if($i % $this->batchSize==0){
			try{
					
				$this -> em -> flush();
				$this->em->clear(); //detaches all objects from doctrine
				}catch(Exception $ex){
				    //die($ex->getMessage());
					/*display user friendly message*/
					
				}//end of catch
				
			} else if($i<$this->batchSize || $i>$this->batchSize || $i==$this->noOfInsertsBatch && 
			$this->noOfInsertsBatch-$i<$this->batchSize){
				 //total records less than a batch, insert all of them
				try{
					
				$this -> em -> flush();
				$this->em->clear(); //detactes all objects from doctrine
				}catch(Exception $ex){
					//die($ex->getMessage());
					/*display user friendly message*/
					
				}//end of catch
				 
				
			}//end of batch condition
					 } //end of innner loop	
					 
					 
	}//close addEquipmentAssessmentInfo
	
	private function addZincCommoditiesInfo(){
		 //get the highest value of the array that will control the number of inserts to be done
			          
			          
			           
						$this->noOfInsertsBatch=max($this->the_z_Ids);
						 
						 
						 for($i=1; $i<=$this->noOfInsertsBatch;++$i){
			 	
				//insert facility if new, else update the existing one
			   $this -> theForm = new \models\Entities\E_Stock(); //create an object of the model
			   
		       //return the id of the last ORT assessment insert to use it in this subsequent equipment assessment
			 	
				$this -> theForm -> setCreatedAt(new DateTime()); /*timestamp option*/
				$this -> theForm -> setStockBatchNo($this->z_elements[$i]['znStockBatchNo']);
				$this -> theForm -> setStockQuantity($this->z_elements[$i]['znStockQuantity']);
				$this -> theForm -> setStockDateDispensed($this->z_elements[$i]['znStockDispensedDate']);
				$this -> theForm -> setStockSupplier($this->z_elements[$i]['znStockSupplier']);
				$this -> theForm -> setStockExpiryDate($this->z_elements[$i]['znStockExpiryDate']);
				$this -> theForm -> setStockComments($this->z_elements[$i]['znStockComments']);
				$this -> theForm -> setStockCommodityType($this->z_elements[$i]['znCommodityName']);
				$this -> theForm -> setStockFacility($this->input->post('facilityMFC'));
				$this -> theForm -> setStockDateOfInventory($this->input->post('facilityDateOfInventory'));
				$this -> em -> persist($this -> theForm);
						
						//now do a batched insert, default at 5
			  $this->batchSize=5;
			if($i % $this->batchSize==0){
			try{
					
				$this -> em -> flush();
				$this->em->clear(); //detaches all objects from doctrine
				}catch(Exception $ex){
				    die($ex->getMessage());
					/*display user friendly message*/
					
				}//end of catch
				
			} else if($i<$this->batchSize || $i>$this->batchSize || $i==$this->noOfInsertsBatch && 
			$this->noOfInsertsBatch-$i<$this->batchSize){
				 //total records less than a batch, insert all of them
				try{
					
				$this -> em -> flush();
				$this->em->clear(); //detactes all objects from doctrine
				}catch(Exception $ex){
					//die($ex->getMessage());
					/*display user friendly message*/
					
				}//end of catch
				 
				
			}//end of batch condition
					 } //end of innner loop	
	}//close addZincCommoditiesInfo
	
	private function addORSCommoditiesInfo(){
		 //get the highest value of the array that will control the number of inserts to be done
			          
			          
			           
						$this->noOfInsertsBatch=max($this->the_ors_Ids);
						 
						 
						 for($i=1; $i<=$this->noOfInsertsBatch;++$i){
			 	
				//insert facility if new, else update the existing one
			   $this -> theForm = new \models\Entities\E_Stock(); //create an object of the model
			   
		       //return the id of the last ORT assessment insert to use it in this subsequent equipment assessment
			 	
				$this -> theForm -> setCreatedAt(new DateTime()); /*timestamp option*/
				$this -> theForm -> setStockBatchNo($this->ors_elements[$i]['orsStockBatchNo']);
				$this -> theForm -> setStockQuantity($this->ors_elements[$i]['orsStockQuantity']);
				$this -> theForm -> setStockDateDispensed($this->ors_elements[$i]['orsStockDispensedDate']);
				$this -> theForm -> setStockSupplier($this->ors_elements[$i]['orsStockSupplier']);
				$this -> theForm -> setStockExpiryDate($this->ors_elements[$i]['orsStockExpiryDate']);
				$this -> theForm -> setStockComments($this->ors_elements[$i]['orsStockComments']);
				$this -> theForm -> setStockCommodityType($this->ors_elements[$i]['orsCommodityName']);
				$this -> theForm -> setStockFacility($this->input->post('facilityMFC'));
				$this -> theForm -> setStockDateOfInventory($this->input->post('facilityDateOfInventory'));
				$this -> em -> persist($this -> theForm);
						
						//now do a batched insert, default at 5
			  $this->batchSize=5;
			if($i % $this->batchSize==0){
			try{
					
				$this -> em -> flush();
				$this->em->clear(); //detaches all objects from doctrine
				}catch(Exception $ex){
				    die($ex->getMessage());
					/*display user friendly message*/
					
				}//end of catch
				
			} else if($i<$this->batchSize || $i>$this->batchSize || $i==$this->noOfInsertsBatch && 
			$this->noOfInsertsBatch-$i<$this->batchSize){
				 //total records less than a batch, insert all of them
				try{
					
				$this -> em -> flush();
				$this->em->clear(); //detactes all objects from doctrine
				}catch(Exception $ex){
					//die($ex->getMessage());
					/*display user friendly message*/
					
				}//end of catch
				 
				
			}//end of batch condition
					 } //end of innner loop	
	}// addORSCommoditiesInfo();
	
	public function retrieveCountyAndDistrictNames(){
		$this->countyList=$this->getAllCountyNames();
		$this->districtList=$this->getAllDistrictNames();
		$this->dbSessionValues=array($this->district,$this->county);
		//var_dump($this->county);exit;
		return $this->dbSessionValues;
	}

	public function getMFCEntered()
	{
		if($this->input->post()){
			$this->mfcCode=$this -> input -> post('username');
		//print $this->mfcCode; exit;
			return $this->mfcCode;
		}
	}
	
}//end of class M_Zinc_Ors_Inventory 
