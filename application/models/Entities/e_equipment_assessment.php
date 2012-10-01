<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="equipment_assesstment")
 */
 class E_Equipment_Assessment {  
  
   /**
	* @Id
	* @Column(name="equipmentAssessmentID", type="integer", length=11, nullable=false)
    * @GeneratedValue(strategy="AUTO")
	* */
	private $equipmentAssessmentID;
	
   /**
	* @ManyToOne(targetEntity="equipment", inversedBy="equipmentCode")
    * @Column(name="equipmentCode", type="string",length=8, nullable=false)
	* */
	private $equipmentCode;
	
   /**
	* @ManyToOne(targetEntity="ortc_assessment", inversedBy="ortAssessmentCode")
    * @Column(name="ortCode", type="integer", length=11, nullable=true)
	* */
	private $ortCode;
	
	/**
	 * @Column(name="equipmentAvailable", type="integer", length=1, nullable=true)
	 * */
	private $equipmentAvailable;
	
   /**
    * @Column(name="quantity", type="integer", length=50, nullable=true)
	* */
	private $quantity;
	
	 
   /**
    * @Column(name="supplierName", type="string",length=45, nullable=true)
	* */
	private $supplierName;
	
   /**
	* @Column(name="budgetKept", type="integer", length="1",nullable=true)
	* */
	private $budgetKept;
	
	public function getEquipmentAssessmentID() {
			return $this -> equipmentAssessmentID;
	}
	
	public function setEquipmentAssessmentID($equipmentAssessmentID) { $this -> equipmentAssessmentID = $equipmentAssessmentID;
	}
	public function getEquipmentCode() {
			return $this -> equipmentCode;
	}
	
	public function setEquipmentCode($fequipmentCode) { $this -> equipmentCode = $equipmentCode;
	}
	public function getOrtCode() {
			return $this -> ortCode;
	}
	
	public function setOrtCode($ortCode) { $this ->ortCode= $ortCode;
	}
	public function getEquipmentAvailable() {
			return $this -> equipmentAvailable;
	}
	
	public function setEquipmentAvailable($equipmentAvailable) { $this ->equipmentAvailable= $equipmentAvailable;
	}
	
	public function getQuantity() {
			return $this -> quantity;
	}
	
	public function setQuantity($quantity) { $this -> quantity = $quantity;
	}
	
	public function getSupplierName() {
			return $this ->supplierName;}
	
	public function setSupplierName($supplierName) { $this -> supplierName = $supplierName;
	}
	
	public function getBudgetKept() {
			return $this -> budgetKept;}
	
	public function setBudgetKept($budgetKept) { $this -> budgetKept = $budgetKept;
	}
	
}
?>