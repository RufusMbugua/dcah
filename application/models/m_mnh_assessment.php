<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 *model to persist data for mnh form
 */
use application\models\Entities\E_Deliverykit_Contents;
use application\models\Entities\E_Labour_And_Delivery;
use application\models\Entities\E_MLW_Medication_Assessment;
use application\models\Entities\E_MNH_Equipment_Assessment;
use application\models\Entities\E_NewBornCare_General_Questions;

class M_MNH_Assessment  extends MY_Model {
	var $id, $attr, $frags, $elements, $noOfInserts, $batchSize,$mfcCode,
	$facility,$commodity, $isFacility;

	function __construct() {
		parent::__construct();
		$this->isFacility='false';
		
	}

	function addRecord() {
        $s=microtime(true); /*mark the timestamp at the beginning of the transaction*/
		 
		 $this->elements = array();
		 $this->theIds=array();
		 
		
		if ($this -> input -> post()) {//check if a post was made
		
	    //$this->updateFacilityInfo();
		//$this->addLabourAndDeliveryInfo();
		$this->add_Q9_MNH_EquipmentAssessmentInfo();
	    //$this->add_Q10_DeliveryKit_Contents_AssessmentInfo();
		//$this->add_Q11_MNH_EquipmentAssessmentInfo();
			
			//exit;
			
			}//close the this->input->post
			$e=microtime(true);
			$this->executionTime=round($e-$s,'4');
	        $this->rowsInserted=$this->noOfInsertsBatch;
			return $this -> response = 'ok';
	} //end of addRecord()

   
   
   //methods required 1. to check if supplied facility name exists
   // 2. If facility name exists, 1. skip the facility insert but update* the facility info supplied 2. insert into the others
   //*For now, just update but later on, try to autosuggest and remind user of a need to update contact info
   
	
	private function addLabourAndDeliveryInfo(){
		
		    foreach ($this -> input -> post() as $key => $val) {//For every posted values
		    if(substr($key,0,4)=="lndq"){//select data for labour and delivery
			     $this->attr = $key;//the attribute name
			     
				 if (!empty($val)) {
					//We then store the value of this attribute for this element.
					// $this->elements[$this->id][$this->attr]=htmlentities($val);
					
					/*the providers are posted as an array, so implode to convert to a coma separated string*/
					if(is_array($val)){
						//$val=$this -> input -> post('lndq6bSkilledProviders');
			     	    $val=implode(',',$val);
					}
					$this->elements[$this->attr]=htmlentities($val);
				   }else{
				   	$this->elements[$this->attr]='';
				   }
				  // print $key.' val='.$val.' <br />';
			 }
			
			 }//close foreach ($this -> input -> post() as $key => $val)
			 
			// exit;
				
		        //get the highest value of the array that will control the number of inserts to be done
						$this->noOfInsertsBatch=1; //labour and delivery Qn5 to 8 will have a single response each
						 
						 
						 for($i=1; $i<=$this->noOfInsertsBatch;++$i){
			 	
				//insert facility if new, else update the existing one
			   $this -> theForm = new \models\Entities\E_Labour_And_Delivery; //create an object of the model
		      
			 	
				$this -> theForm -> setCreatedAt(new DateTime()); /*timestamp option*/
				$this -> theForm -> setFacilityCode($this->input->post('facilityMFC'));
				$this -> theForm -> setDeliveryService24Hours($this->elements['lndq5FacilityDelivery']);
				/*if no comment set, then set to N/A*/
				($this->elements['lndq5Comment']=='')?$this -> theForm -> setDeliveryService24HoursComments('N/A'):$this -> theForm -> setDeliveryService24HoursComments($this->elements['lndq5Comment']); 
				$this -> theForm -> setDeliverySkilledPersonnelAvailable($this->elements['lndq6aConductingDelivery']);
				/*any skilled provider listed under other?*/
				($this->elements['lndq5Comment']=='')?$this -> theForm -> setDeliveryServiceProviders($this->elements['lndq6bSkilledProviders']):$this -> theForm -> setDeliveryServiceProviders($this->elements['lndq6bSkilledProviders'].','.$this->elements['lndq6otherProvider']);
				$this -> theForm -> setNumberOfBedsInMaternity($this->elements['lndq7TotalBeds']);
				$this -> theForm -> setDeliveryRoomDescription($this->elements['lndq8DeliveryRoom']);
				$this -> theForm -> setDateOfAssessment(new DateTime()); //date set today's
				$this -> em -> persist($this -> theForm);
						
						
			
			  
			try{//now do a batched insert
					
				$this -> em -> flush();
				$this->em->clear(); //detaches all objects from doctrine
				
				}catch(Exception $ex){
				    die($ex->getMessage());
					/*display user friendly message*/
					
				}//end of catch
				
			
					 } //end of innner loop	
	}//close addORTInfo
	
	private function add_Q9_MNH_EquipmentAssessmentInfo(){
		$count=$finalCount=1;
		foreach ($this -> input -> post() as $key => $val) {//For every posted values
		    if(substr($key,0,2)=="q9"){//select data for equipment
			   //we separate the attribute name from the number
					
				  $this->frags = explode("_", $key);
				   
				  //$this->id = $this->frags[1];  // the id
				
				 $this->id = $count;  // the id
				    
				   $this->attr = $this->frags[0];//the attribute name
				 
				
				//print $key.' ='.$val.' <br />';
				//print 'ids: '.$this->id.'<br />';
				
				     //mark the end of 1 row...for record count
				if($this->attr=="q9equipCode"){
					// print 'count at:'.$count.'<br />';
					
					$finalCount=$count;
					 $count++;
					// print 'count at:'.$count.'<br />';
					 //print 'final count at:'.$finalCount.'<br />';
					//print 'DOM: '.$key.' Attr: '.$this->attr.' val='.$val.' id='.$this->id.' <br />';
				}
				  
				  //collect key and value to an array
				 if (!empty($val)) {
					//We then store the value of this attribute for this element.
					 $this->elements[$this->id][$this->attr]=htmlentities($val);
					
					//$this->elements[$this->attr]=htmlentities($val);
				   }else{
				   $this->elements[$this->id][$this->attr]='';
					//$this->element=array('id'=>$this->id,'name'=>$this->attr,'value'=>'');
				   }
				   
				    
				  
			 }
			
			 }//close foreach ($this -> input -> post() as $key => $val)
			//print var_dump($this->elements);
			
			//exit;
		    
		          //get the highest value of the array that will control the number of inserts to be done
				  $this->noOfInsertsBatch=$finalCount;
						 
						 
				 for($i=1; $i<=$this->noOfInsertsBatch;++$i){
			 	
				//go ahead and persist data posted
			   $this -> theForm = new \models\Entities\E_MNH_Equipment_Assessment(); //create an object of the model
			   
		      
			 	
				
				$this -> theForm -> setEquipmentCode($this->elements[$i]['q9equipCode']);
				$this -> theForm -> setFacilityCode($this->input->post('facilityMFC'));
				
				//check if that key exists, else set it to some default value
				(isset($this->elements[$i]['q9equipAvailability']))?$this -> theForm -> setAvailable($this->elements[$i]['q9equipAvailability']):$this -> theForm -> setAvailable("N/A");
				(isset($this->elements[$i]['q9equipAQty']))?$this -> theForm -> setQuantityAvailable($this->elements[$i]['q9equipAQty']):$this -> theForm -> setQuantityAvailable(-1);;
				(isset($this->elements[$i]['q9equipFunctioning']))?$this -> theForm -> setFunctioning($this->elements[$i]['q9equipFunctioning']):$this -> theForm -> setFunctioning('N/A');
				(isset($this->elements[$i]['q9equipFQty']))?$this -> theForm -> setQuantityFunctioning($this->elements[$i]['q9equipFQty']):$this -> theForm -> setQuantityFunctioning(-1);
				//(isset($this->elements[$i]['q9equipFQty']))?$this -> theForm -> setEquipmentType($this->elements[$i]['q9equipFQty']):$this -> theForm -> setEquipmentType('N/A');
				$this -> theForm -> setEquipmentType('N/A');
				$this -> theForm -> setQuestionSection('Qn-9');
				$this -> theForm -> setDateOfAssessment(new DateTime());
				$this -> theForm -> setCreatedAt(new DateTime()); /*timestamp option*/
				$this -> em -> persist($this -> theForm);
						
						//now do a batched insert, default at 5
			  $this->batchSize=5;
			if($i % $this->batchSize==0){
			try{
					
				$this -> em -> flush();
				$this->em->clear(); //detaches all objects from doctrine
				}catch(Exception $ex){
				   // die($ex->getMessage());
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
					 
					 
	}//close add_Q9_MNH_EquipmentAssessmentInfo
	
	private function add_Q10_DeliveryKit_Contents_AssessmentInfo(){
		$count=$finalCount=1;
		foreach ($this -> input -> post() as $key => $val) {//For every posted values
		    if(substr($key,0,3)=="q10"){//select data for delivery kit contents assessment
			   //we separate the attribute name from the number
					
				  $this->frags = explode("_", $key);
				   
				  //$this->id = $this->frags[1];  // the id
				
				 $this->id = $count;  // the id
				    
				   $this->attr = $this->frags[0];//the attribute name
				 
				
				//print $key.' ='.$val.' <br />';
				
				
				     //mark the end of 1 row...for record count
				if($this->attr=="q10equipCode"){
					// print 'count at:'.$count.'<br />';
					
					$finalCount=$count;
					 $count++;
					//print 'count at:'.$count.'<br />';
					 //print 'final count at:'.$finalCount.'<br />';
					//print 'DOM: '.$key.' Attr: '.$this->attr.' val='.$val.' id='.$this->id.' <br />';
				}
				  
				  //collect key and value to an array
				 if (!empty($val)) {
					//We then store the value of this attribute for this element.
					 $this->elements[$this->id][$this->attr]=htmlentities($val);
					
					//$this->elements[$this->attr]=htmlentities($val);
				   }else{
				   $this->elements[$this->id][$this->attr]='';
					//$this->element=array('id'=>$this->id,'name'=>$this->attr,'value'=>'');
				   }
			
			 }
			
			 }//close foreach ($this -> input -> post() as $key => $val)
			//print var_dump($this->elements);
			//print $this->elements[9]['q10equipCode'];
			//exit;
		    
		          //get the highest value of the array that will control the number of inserts to be done
				  $this->noOfInsertsBatch=$finalCount;
						 
						 
				 for($i=1; $i<=$this->noOfInsertsBatch;++$i){
			 	
				//go ahead and persist data posted
			   $this -> theForm = new \models\Entities\E_Deliverykit_Contents(); //create an object of the model
			   
				
				
				$this -> theForm -> setFacilityCode($this->input->post('facilityMFC'));
				
				//check if that key exists, else set it to some default value
				
				(isset($this->elements[$i]['q10equipAQty']))?$this -> theForm -> setQuantity($this->elements[$i]['q10equipAQty']):$this -> theForm -> setQuantity(-1);;
				$this -> theForm -> setEquipmentID($this->elements[$i]['q10equipCode']);
				$this -> theForm -> setDateOfAssessment(new DateTime());
				$this -> theForm -> setCreatedAt(new DateTime()); /*timestamp option*/
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
					die($ex->getMessage());
					/*display user friendly message*/
					
				}//end of catch
				 
				
			}//end of batch condition
					 } //end of innner loop	
					 
					 
	}//close add_Q10_DeliveryKit_Contents_AssessmentInfo
	
	private function add_Q11_MNH_EquipmentAssessmentInfo(){
		$count=$finalCount=1;
		foreach ($this -> input -> post() as $key => $val) {//For every posted values
		    if(substr($key,0,3)=="q11"){//select data for equipment
			   //we separate the attribute name from the number
					
				  $this->frags = explode("_", $key);
				   
				  //$this->id = $this->frags[1];  // the id
				
				 $this->id = $count;  // the id
				    
				   $this->attr = $this->frags[0];//the attribute name
				 
				
				//print $key.' ='.$val.' <br />';
				
				
				     //mark the end of 1 row...for record count
				if($this->attr=="q11equipCode"){
					// print 'count at:'.$count.'<br />';
					
					$finalCount=$count;
					 $count++;
					// print 'count at:'.$count.'<br />';
					 //print 'final count at:'.$finalCount.'<br />';
					//print 'DOM: '.$key.' Attr: '.$this->attr.' val='.$val.' id='.$this->id.' <br />';
				}
				  
				  //collect key and value to an array
				 if (!empty($val)) {
					//We then store the value of this attribute for this element.
					 $this->elements[$this->id][$this->attr]=htmlentities($val);
					
					//$this->elements[$this->attr]=htmlentities($val);
				   }else{
				   $this->elements[$this->id][$this->attr]='';
					//$this->element=array('id'=>$this->id,'name'=>$this->attr,'value'=>'');
				   }
				   
				    
				  
			 }
			
			 }//close foreach ($this -> input -> post() as $key => $val)
			//print var_dump($this->elements);
			
			//exit;
		    
		          //get the highest value of the array that will control the number of inserts to be done
				  $this->noOfInsertsBatch=$finalCount;
						 
						 
				 for($i=1; $i<=$this->noOfInsertsBatch;++$i){
			 	
				//go ahead and persist data posted
			   $this -> theForm = new \models\Entities\E_MNH_Equipment_Assessment(); //create an object of the model
			   
		      
			 	
				
				$this -> theForm -> setEquipmentCode($this->elements[$i]['q11equipCode']);
				$this -> theForm -> setFacilityCode($this->input->post('facilityMFC'));
				
				//check if that key exists, else set it to some default value
				(isset($this->elements[$i]['q11equipAvailability']))?$this -> theForm -> setAvailable($this->elements[$i]['q11equipAvailability']):$this -> theForm -> setAvailable('N/A');
				(isset($this->elements[$i]['q11equipAQty']))?$this -> theForm -> setQuantityAvailable($this->elements[$i]['q11equipAQty']):$this -> theForm -> setQuantityAvailable(-1);;
				(isset($this->elements[$i]['q11equipFunctioning']))?$this -> theForm -> setFunctioning($this->elements[$i]['q11equipFunctioning']):$this -> theForm -> setFunctioning('N/A');
				(isset($this->elements[$i]['q11equipFQty']))?$this -> theForm -> setQuantityFunctioning($this->elements[$i]['q11equipFQty']):$this -> theForm -> setQuantityFunctioning(-1);
				(isset($this->elements[$i]['q11equipAType']))?$this -> theForm -> setEquipmentType($this->elements[$i]['q11equipAType']):$this -> theForm -> setEquipmentType('N/A');
				$this -> theForm -> setEquipmentType('N/A');
				$this -> theForm -> setQuestionSection('Qn-11');
				$this -> theForm -> setDateOfAssessment(new DateTime());
				$this -> theForm -> setCreatedAt(new DateTime()); /*timestamp option*/
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
					die($ex->getMessage());
					/*display user friendly message*/
					
				}//end of catch
				 
				
			}//end of batch condition
					 } //end of innner loop	
					 
					 
	}//close add_Q11_MNH_EquipmentAssessmentInfo
}//end of class M_Zinc_Ors_Inventory 
