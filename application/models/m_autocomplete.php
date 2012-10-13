<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 *model to E_Facility entities
 */
use application\models\Entities\E_Facility;

class M_Autocomplete extends MY_Model {
	var $facility;

	function __construct() {
		parent::__construct();
	}
	
	public function getAutocomplete()
	{
		
	}
	
}//end of class M_Autocomplete 
