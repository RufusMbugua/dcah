<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="ortc_assessment")
 */
 class E_OrtC_Assessment {  
  
   /**
	* @Id
	* @Column(name="ortAssessmentCode", type="integer", length=11, nullable=false)
    * @GeneratedValue(strategy="AUTO")
	* */
	private $ortAssessmentCode;
	
   /**
	* @ManyToOne(targetEntity="facility", inversedBy="facilityMFC")
    * @Column(name="facilityMFC", type="string",length=45, nullable=false)
	* */
	private $facilityMFC;
	
   /**
	* @Column(name="question1", type="integer", length=1, nullable=true)
	* */
	private $question1;
	
	/**
	* @Column(name="question2", type="integer", length=1, nullable=true)
	* */
	private $question2;
	
   /**
    * @Column(name="locationOfDehydrationUnit", type="string", length=50, nullable=true)
	* */
	private $locationOfDehydrationUnit;
	
	 
   /**
    * @Column(name="dateOfAssessment", type="string",length=10, nullable=true)
	* */
	private $dateOfAssessment;
	
   /**
	* @Column(name="createdAt", type="date", nullable=true)
	* */
	private $createdAt;
	
	public function getOrtAssessmentCode() {
			return $this -> ortAssessmentCode;
	}
	
	public function setOrtAssessmentCode($ortAssessmentCode) { $this -> ortAssessmentCode = $ortAssessmentCode;
	}
	public function getFacilityMFC() {
			return $this -> facilityMFC;
	}
	
	public function setFacilityMFC($facilityMFC) { $this -> facilityMFC = $facilityMFC;
	}
	public function getQuestion1() {
			return $this -> question1;
	}
	
	public function setQuestion1($question1) { $this ->question1= $question1;
	}
	public function getQuestion2() {
			return $this -> question2;
	}
	
	public function setQuestion2($question2) { $this ->question2= $question2;
	}
	
	public function getLocationOfDehydrationUnit() {
			return $this -> locationOfDehydrationUnit;
	}
	
	public function setLocationOfDehydrationUnit($locationOfDehydrationUnit) { $this -> locationOfDehydrationUnit = $locationOfDehydrationUnit;
	}
	
	public function getDateOfAssessment() {
			return $this -> dateOfAssessment;}
	
	public function setDateOfAssessment($dateOfAssessment) { $this -> dateOfAssessment = $dateOfAssessment;
	}
	
	public function getCreatedAt() {
			return $this -> createdAt;}
	
	public function setCreatedAt($createdAt) { $this -> createdAt = $createdAt;
	}
	
}
?>