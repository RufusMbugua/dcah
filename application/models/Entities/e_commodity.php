<?php
namespace models\Entities;

	/**
	 * @Entity
	 * @Table(name="commodity")
	 */
 class E_Commodity{
 	
   /**
	* @Id
	* @Column(name="commodityID", type="integer", length=11, nullable=false)
	* @GeneratedValue(strategy="AUTO")
	* */
	private $commodityID;
	
   /**
	* @Column(name="commodityName", type="string",length=45, nullable=false)
	* */
	private $commodityName;
	 
	public function getCommodityID() {
			return $this -> commodityID;
	}
	
	public function setCommodityID($commodityID) { $this -> commodityID = $commodityID;
	}
	 
	public function getCommodityName() {
			return $this -> commodityName;
	}
	
	public function setCommodityName($commodityName) { $this -> commodityName = $commodityName;
	}
}
?>