<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="facility")
 */
 class E_Facility {  
  
   /**
	* @Id
	* @Column(name="facilityID", type="integer", length=11, nullable=false)
    * @GeneratedValue(strategy="AUTO")
	* */
	private $facilityID;
	
   /**
	* @Column(name="facilityMFC", type="string",length=45, nullable=false)
	* */
	private $facilityMFC;
	
   /**
	* @Column(name="facilityName", type="string", length=45, nullable=false)
	* */
	private $facilityName;
	
   /**
	* @ManyToOne(targetEntity="district", inversedBy="districtName")
    * @Column(name="facilityDistrict", type="string", length=45, nullable=true)
	* */
	private $facilityDistrict;
	
	 
   /**
	* @ManyToOne(targetEntity="county", inversedBy="countyName")
    * @Column(name="facilityCounty", type="string",length=45, nullable=true)
	* */
	private $facilityCounty;
	
   /**
	* @Column(name="facilityContactPerson", type="string", length=45, nullable=true)
	* */
	private $facilityContactPerson;
	
	/**
	* @Column(name="zincOrsDispensedFrom", type="string", length=45, nullable=false)
	* */
	//private $zincOrsDispensedFrom;
	
	/**
	* @Column(name="facilityEmail", type="string", length=100, nullable=true)
	* */
	private $facilityEmail;
	
	/**
	* @Column(name="facilityTelephone", type="string", length=15, nullable=true)
	* */
	private $facilityTelephone;
	
	/**
	* @Column(name="createdAt", type="datetime", nullable=true)
	* */
	private $createdAt;
	
	/**
	* @Column(name="updatedAt", type="datetime", nullable=true)
	* */
	private $updatedAt;
	
	public function getFacilityID() {
			return $this -> facilityID;
	}
	
	public function setFacilityID($facilityID) { $this -> facilityID = $facilityID;
	}
	public function getFacilityMFC() {
			return $this -> facilityMFC;
	}
	
	public function setFacilityMFC($facilityMFC) { $this -> facilityMFC = $facilityMFC;
	}
	public function getFacilityName() {
			return $this -> facilityName;
	}
	
	public function setFacilityName($facilityName) { $this -> facilityName = $facilityName;
	}
	public function getFacilityDistrict() {
			return $this -> facilityDistrict;
	}
	
	public function setFacilityDistrict($facilityDistrict) { $this -> facilityDistrict = $facilityDistrict;
	}
	public function getFacilityCounty() {
			return $this -> facilityCounty;
	}
	
	public function setFacilityCounty($facilityCounty) { $this -> facilityCounty = $facilityCounty;
	}
	
	public function getFacilityContactPerson() {
			return $this -> facilityContactPerson;}
	
	public function setFacilityContactPerson($facilityContactPerson) { $this -> facilityContactPerson = $facilityContactPerson;
	}
	
	/*public function getZincOrsDispensedFrom() {
			return $this -> zincOrsDispensedFrom;}
	
	public function setZincOrsDispensedFrom($zincOrsDispensedFrom) { $this -> zincOrsDispensedFrom = $zincOrsDispensedFrom;
	}*/
	
	public function getFacilityEmail() {
			return $this -> facilityEmail;
	}
	
	public function setFacilityEmail($facilityEmail) { $this -> facilityEmail = $facilityEmail;
	}
	
	public function getFacilityTelephone() {
			return $this -> facilityTelephone;
	}
	
	public function setFacilityTelephone($facilityTelephone) { $this -> facilityTelephone = $facilityTelephone;
	}
	
	public function getCreatedAt() {
			return $this -> createdAt;
	}
	
	public function setCreatedAt($createdAt) { $this ->createdAt = $createdAt;
	}
	
	public function getUpdatedAt() {
			return $this -> updatedAt;
	}
	
	public function setUpdatedAt($updatedAt) { $this ->updatedAt = $updatedAt;
	}
}
?>